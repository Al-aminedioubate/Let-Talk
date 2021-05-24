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
            <section class="form signup">
                <header>RealTime Chap App</header>
                <form action="#" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input name="image" type="file" required>
                    </div>
                   
                    <div class="field button">
                        <input type="submit" value="Contenue to Chat">
                    </div>
                </form>
                <div class="link">Already signed up ? <a href="login.php">Log in now</a></div>
            </section>
        </div>

        <!--le debut de script pour traitement de mot de passe--->
        <script src="javaScript/pass-show-hide.js"></script>
        <script src="javaScript/signup.js"></script>

    </body>
</html>