<?php

    include_once '../buisnessLogic/userMapper.php';

    if (isset($_SESSION["role"]) && $_SESSION['role']=='1') {
        $mapper=new UserMapper;

        $userList=$mapper->getAllUsers();
    }

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
            Admin Nav
        </title>
    </head>
    <body>
    <?php
        include('../Re-Usable/adminNav.php');
      ?>

    <div class='parentNav'>
        <div>
            <h3>
                Number of active users:
            </h3>
        </div>
        <div>
            <h3>
                Number of articles:
            </h3>
        </div>
    </div>
    <div class='parentNav'>
        <div>
            <h3>
                Number of paid adversts:
            </h3>
        </div>
        <div>
            <h3>
                Number of Jurnalists:
            </h3>
        </div>
    </div>

    </body>
</html>