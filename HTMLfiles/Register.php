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
                <form action="../buisnessLogic/procedural/register.php" method="POST">

                    <b>
                        Fields marked with * are required
                    </b>
                    <label>
                        Full name *
                    </label>
                    <input type="text"  placeholder="Full name" name="fullName">
                    <label>
                        E-Mail *
                    </label>
                    <input type="email" required placeholder="Email" name="email">
                    <label>
                        Password *
                    </label>
                    <input type="password" required placeholder="Password" name="password">
                    <label>
                        Phone number
                    </label>
                    <input type="text"  placeholder="Phone Number" name="phoneNr">
                    <button name="submit" id="submitBtn">
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