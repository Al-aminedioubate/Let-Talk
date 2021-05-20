<?php
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //validation des champs d'entrees
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){

        //validation de l'email user
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            //verifions si l'email existe dans la base de donnees ou pas
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email='{$email}' ");

            if(mysqli_num_rows($sql) > 0){

                echo "$email - cet email existe deja ";
            }else{
                //verifions si user a uploader un fichier ou non
                if(isset($_FILES['file'])){
                    $img_name = $_FILES['image']['name'];                       //recuperation de nom de l'image uploader par l'utilisateur
                    $img_type = $_FILES['image']['type'];                       //recuperation de type d'image uploader par l'utilisateur
                    $tmp_name = $_FILES['image']['tmp_name'];                   //le nom temporaire pour le sauvegarde d'images dans la BD

                    //recuperation de l'extension d'image
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);                                //la on a recuperer l'extention d'img de l'utilisateur

                    $extensions = ['png', 'jpeg', 'jpg'];                       //Nos extensions valides 
                    if(in_array($img_ext, $extensions) == true){                //comparaison de nos extensions et celle de l'utilisateur a uploaded si sa correspond a l'une de nos extensions 
                        $time = time();                                         //CELLA nous retourne le temps courrant...ce temps nous permettra de renomer img fichier l'utilsateur avec le tmp courant
                                                                                //cela fait que toutes les img fichier auront un nom unique
                        
                        //deplacons img de l'utilisateur dans un fichier particulier car user img sera sauver mais plutot url du fichier
                        $new_img_name = $time.$img_name;                                     //quant user met deux img different avec mm nom a la fois les img seront unique par le tmp d'ajout
                        if(move_uploaded_file( $tmp_name, "images/".$new_img_name)){            //lorsque l'img de user a ete mise avec succes dans ntre dossiers
                            $status = "Active now";                                         //une fois que l'utilisateur se connecte son status sera active now 
                            $random_id = rand(time(), 10000000);                            //generation des id aleatoire pour l'utilisateur

                            //insertion de toutes les donnees des user dans la table
                            $sql2 = mysqli_query($conn, "SELECT INTO users (unique_id, fname, lname, email, password, img, status)
                                                VALUES ({$random_id}, '{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{ $status}')");
                            if($sql2){                                                           //si les donnees ont ete bien inserer
                                $sql3 = mysqli_query($conn, "SELECT* FROM users WHERE email='{$email}' ");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "success";                            
                                }
                            }else{
                                echo "Une erreur s'est produite!";
                            }                             
                        }
                    }else{
                        echo "SVP choisisez une images avec des extensions jpeg, jpg ou png!";
                    }

                }else{
                    echo "SVP choisisez une images!";
                }
            }

        }else{
            echo "$email - Ceci n'est pas une adresse email valide";
        }

    }else{
        echo "All input field are required!";
    }
?>