<!DOCTYPE html>
    <?php
        require_once '../buisnessLogic/dbh.class.php';
    ?>
<html>
    <head>

        <!-- Style Links -->

        <link rel="stylesheet" href="../CSSfiles/HeaderStyle.css">
        <link rel="stylesheet" href="../CSSfiles/FooterStyle.css">
        <link rel="stylesheet" href="../CSSfiles/LoginStyle.css">

        <title>
            Login
        </title>

        <!-- Font links -->

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">

    </head>
    <body>

    <?php
        include('../Re-Usable/header.php');
      ?>

        <div class="containerOne">

            <div class="containerIn">
                <div>
                    <img src="../Pics/newspaper.png">
                </div>
                <form action="../buisnessLogic/loginVerify.php" method="post">
                    <b>
                        Login for Users
                    </b>
                    <label>
                        Username
                    </label>
                    <input required max="40" min="5" name="username">
                    <label>
                        Password
                    </label>
                    <input  max="400" min="16" type="password" name="password"> 

                    <input type="submit" value="Sign in" class="btn" name="login-btn">

                    <a href="#">Forgot Password?</a>
                </form>
            </div>

        </div>


		<?php
        include('../Re-Usable/footer.php');
      ?>

    </body>
</html>