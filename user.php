<?php 
//la session est active quant user fait un login or signup donc si la session n'est pas actives on va rediriger user vers la page de login
    session_start();
    if(!isset($_SESSION['unique_id'])){

        header("location: login.php");
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RealTime Chap Wep App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
    <body>
        <div class="wrapper">
            <section class="users">
                <header>
                    <?php 
                        include_once "php/config.php";
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE  unique_id = {$_SESSION['unique_id']} ");        //la on va selectionner toute les donnees de l'utilisateur courant connecter en utilisant session 
                        if(mysqli_num_rows($sql) > 0){
                            $row = mysqli_fetch_assoc($sql);                                    //cela nous permet de transformer les donnes static en dynamique donc la sa va recuperer le nom de users dans la BD en 
                                                                                                //et mettre cela comme lutisateur courant active
                        }                                                                       
                    ?>
                    <div class="content">
                        <img src="php/images/<?php echo $row['img']?>" alt="">                   <!--la on a l'image de mise par l'utilisateur comme img de profil --->
                        <div class="details">
                            <span><?php echo $row['fname']." ". $row['lname']?> </span>
                            <p><?php echo $row['status']?></p>
                        </div>
                    </div>
                    <a href="#" class="logout">Logout</a>
                </header>
                <div class="search">
                   <span class="text">Select an users to start chat</span>
                   <input type="text" placeholder="Enter name to search...">
                   <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">
                    
                </div>
            </section>
        </div>

          <!--le debut de script pour traitement de la barre de recherche de l'utilisateur--->
          <script src="javaScript/users.js"></script>
    </body>
</html>