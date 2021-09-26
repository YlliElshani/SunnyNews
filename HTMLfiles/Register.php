<!DOCTYPE html>
<html>
    <?php

    require_once '../buisnessLogic/procedural/database.inc.php';
    require_once '../buisnessLogic/procedural/register.php';

    ?>
    <head>

        <!-- Styles and links -->

        <link rel="stylesheet" href="../CSSfiles/HeaderStyle.css">
        <link rel="stylesheet" href="../CSSfiles/FooterStyle.css">
        <link rel="stylesheet" href="../CSSfiles/Register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">

        <title>Register</title>

    </head>
    <body>
    <?php
        include('../Re-Usable/header.php');
    ?>


        <div class="regBox">
            <div class="colorBox">
                <!-- Empty Inside -->
            </div>
            <div class="formBox">
                <h3>
                    Register
                </h3>
                <form action="../buisnessLogic/loginVerify.php" method="post">
                    <b>
                        Fields marked with * are required
                    </b>
                    <label>
                        Username *
                    </label>
                    <input type="text" required  placeholder="Full name" name="username" id="username">
                    <label>
                        E-Mail *
                    </label>
                    <input type="text" required  placeholder="Email" name="email" id="email">
                    <label>
                        Password *
                    </label>
                    <input type="password" required  placeholder="Password" name="password" id="password">
                    <button name="registerBtn" id="submitBtn">
                        Submit
                    </button>
                    <br/>
                    <button name="redirected" class="loginBtn">
                        <a href="LoginUsers.php">Have an Acoount? Log in</a>
                    </button>
                </form>

            </div>
        </div>

    <?php
        include('../Re-Usable/footer.php');
      ?>
    </body>
</html>


    <script>
        emailReg=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/
        passwordReg=/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;

        function validateForm(){
            var username=document.getElementById("username").value;
            var email=document.getElementById("email").value;
            var password=document.getElementById("password").value;

            if(username==null||username==""){
                alert("Please enter your username");
                return false;
            }
            if(email==null||email==""){
                alert("Please enter an email");
                return false;
            }
            if(!test.emailReg(email)){
                alert("Please enter a valid email");
                return false;
            }
            if(password==null||password==""){
                alert("Please enter a password");
                return false;
            }
            if(!test.passwordReg(password)){
                alert("Please enter a valid password");
                return false;
            }
                alert("Succesful register");
        }
    </script>