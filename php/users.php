<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){         //si on a un seul champ dans la BD celui la est utilisateur courant connecter donc dans ce cas pas d'utilisateur pour parler quant utilisateur 
                                            //equal 1
        $output .= "Pas d'utilisateur disponible pour parler"; 
    }elseif(mysqli_num_rows($sql) > 0){                              //autrement on affiche tout les utilisateur
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="#">
            <div class="content">
                <img src="php/images/'.$row['img'].'" alt="">
                <div class="details">
                    <span>'.$row['fname']." ". $row['lname'].'</span>
                    <p>Ceci est un message de test</p>
                </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
            </a>';
        }
    }
    echo  $output ;
?>