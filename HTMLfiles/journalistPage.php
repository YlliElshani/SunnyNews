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
    <script src="../JSFiles/sidebar.js"></script>
        <title>
            News editor
        </title>
    </head>
    <body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">News Editor</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact forms</a>
    </div>
    <div id="main">
  <button class="openbtn" onclick="openNav()">&#9776; Open Sidebar</button>
    </div>

    <div>
        <form>
            
        </form>
    </div>

    </body>
</html>