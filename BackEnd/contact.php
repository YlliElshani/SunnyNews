<?php     

    if (isset($_POST['submit'])) {
        $name =trim($_POST['name']);
        $email =trim($_POST['email']);
        $phoneNR =trim($_POST['phoneNR']);
        $cat =trim($_POST['cat']);
        $message =trim($_POST['message']);
        
        $myMail="yllielshani6@gmail.com";
        $header="From:".$email;
        $message2="You have recieved a message from".$name.". \n\n".$message;
        //Dergon email ne nje email te kompanis psh
        mail($myMail,$cat,$message2,$header);
        header("Location: Contact Us.php");
    }