<?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $name = $_FILES['file']['name'];//gjen emrin e file
        $tmp_name = $_FILES['file']['tmp_name'];//gjen emrin e tmp name
        $size = $_FILES['file']['size'];//gjen madhsin e file
        $error = $_FILES['file']['error'];//gjen errors

        $tempExtension=explode(".",$name);//e ndan emrin ne pjese, ne e ndajm prej "." psh .png,.jpg

        
        //PNG=/=png, duhet me konvertu me strtolower
        $fileExtension=strtolower(end($tempExtension));//end merr elementin e fundit ne array pas explode pra mbas  "."


        //allowed extensions
        $isAllowed = array('jpg','jpeg','png','pdf');


        if (in_array($fileExtension,$isAllowed)) {
            //kontrollojm per gabime ne uploadim me $error===0. 0=no error, 1=error
            if($error===0){
                if($size<130000){
                    $newFileName=uniqid('',true).".".$fileExtension;//per te mos shkatruar file-in e derguar krijohet
                                                                    //nje variabel e re qe ruan file-in me emer te ri sipas uniqid
                    $fileDestination="uploads/".$newFileName;
                    move_uploaded_file($tmp_name,$fileDestination);
                    header("Location: index.php?uploadedsuccess");
                }else{
                    echo "file size is too big";
                }
            }else{
                echo "There was an error";
            }
        }else{
            echo "Your file is not permitted";
        }
    }
