<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){
        //Pour la connection on verifie si l'email entrer par user correspond a celui dans la BD
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";

        }else{
            echo "l'email ou le mot de passe est incorrect"; 
        }

    }else{
        echo "Tout les champs sont obligatoires!";
    }
?>