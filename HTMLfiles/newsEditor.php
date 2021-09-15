<?php


?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../CSSfiles/sidebar.css">
    <link rel="stylesheet" href="../CSSfiles/journalistPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <script src="../JSFiles/sidebar.js"></script>
        <title>
            News Editor
        </title>
    </head>
    <body>
    <?php
        include('../Re-Usable/adminNav.php');
      ?>
        <div class="formBox">
                <h3>
                    Add news Article
                </h3>
                <form action="../buisnessLogic/loginVerify.php" method="post">

                    <b>
                        Fields marked with * are required
                    </b>
                    <b>
                        Journalist emails end with @sunnyJournalist.net
                    </b>
                    <label>
                        Headline
                    </label>
                    <input type="text" placeholder="Headline" name="headline">
                    <label>
                        Content
                    </label>
                    <textarea required  name="content"></textarea>
                    <label>
                       Journalist name(s)
                    </label>
                    <input type="text" required placeholder="Journalist(s)" name="writtenBy">
                    <button name="registerBtn" id="submitBtn">
                        Submit
                    </button>
                    <br/>
                </form>

            </div>


    </body>
</html>