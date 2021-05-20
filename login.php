<!DOCTYPE html>

<html lang="en">
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
            <section class="form login">
                <header>RealTime Chap App</header>
                <form action="#">
                    <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Contenue to Chat">
                    </div>
                </form>
                <div class="link">Not yet signed up ? <a href="index.php">Signup now</a></div>
            </section>
        </div>

        <!--le debut de script pour traitement de mot de passe--->
        <script src="javaScript/pass-show-hide.js"></script>
        <script src="javaScript/login.js"></script>
    </body>
</html>