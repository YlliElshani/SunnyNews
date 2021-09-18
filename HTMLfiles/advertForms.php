<?php

    include_once '../buisnessLogic/advertMapper.php';
    include_once '../buisnessLogic/advertLogic.php';
    $mapper=new AdvertMapper()
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
            Contact forms
        </title>
    </head>
    <body>
    <?php
        include('../Re-Usable/adminNav.php');
      ?>

<div class='infoBox'>
        <div>
            <h3>
                Contact forms sent:
            </h3>
            <div>
                <?php
                    $forms=$mapper->getAllAdverts();
                    foreach($forms as $form){
                ?>
                
                <b>
                    <?php echo $form['cName']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['email']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['phoneNr']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['cLength']?>
                </b>
                    <br>
                <p>
                    <?php echo $form['adType']?>
                </p>

                <p>
                    <?php echo $form['moreInfo']?>
                </p>
                        
                <a href=<?php echo "../buisnessLogic/deleteContact.php?id=".$form['id'];
                    ?>>Confirm</a>
                <br/>
                <?php
                } 
                ?>
            </div>
        </div>
    </div>

    </body>
</html>