<?php

    if (isset($_POST['submit'])) {
        require '../Public/includes/database.php';

        $fullName=$_POST['fullName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phoneNr=$_POST['phoneNr'];

            if (empty($fullName) || empty($email) || empty($password) || empty($phoneNr)) {
                header("Location: ../Public/HTMLfiles/Register.php?error=emptyFields&fullName=".$fullName);
                exit();
            }else if(!preg_match("/^[a-zA-Z0-9]*/",$fullName)){
                header("Location: ../Public/HTMLfiles/Register.php?error=invalidFullName&fullName=".$fullName);
                exit();
            }else{
                $sql="SELECT email FROM users WHERE email = ?";

                $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../Public/HTMLfiles/Register.php?error=sqlError");
                        exit();
                    }else{
                        //INSERT here

                        mysqli_stmt_bind_param($stmt,"s",$email);

                        mysqli_stmt_execute($stmt);

                        mysqli_stmt_store_result($stmt);

                        $rowCount = mysqli_stmt_num_rows($stmt);

                        if ($rowCount>0) {
                            header("Location: ../Public/HTMLfiles/Register.php?error=emailExists");
                            exit();
                        }else{

                          $sql="INSERT INTO users (fullName,email,password,phoneNr) VALUES (?,?,?,?)";
                          
                          $stmt = mysqli_stmt_init($conn);

                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                header("Location: ../Public/HTMLfiles/Register.php?error=sqlError");
                                exit();
                            }else{

                                $hashedPass = password_hash($password,PASSWORD_DEFAULT);
                                        
                                mysqli_stmt_bind_param($stmt,"sssi",$fullName,$email,$hashedPass,$phoneNr);

                                mysqli_stmt_execute($stmt);

                                mysqli_stmt_store_result($stmt);
                                header("Location: ../Public/HTMLfiles/Homepage.php?success=registered");
                                exit();

                            }
                        }
                    }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
    }