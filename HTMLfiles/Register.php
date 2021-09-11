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
                    <input type="text"  placeholder="Full name" name="username">
                    <label>
                        E-Mail *
                    </label>
                    <input type="email" required placeholder="Email" name="email">
                    <label>
                        Password *
                    </label>
                    <input type="password" required placeholder="Password" name="password">
                    <button name="registerBtn" id="submitBtn">
                        Submit
                    </button>
                    <br/>
                    <button name="registerBtn" id="registerBtn">
                        Submit
                    </button>
                </form>

            </div>
        </div>

    <?php
        include('../Re-Usable/footer.php');
      ?>
    </body>
</html>