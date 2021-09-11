<?php

include_once 'Person.class.php';


class SimpleUser extends Person{
            
    public function __construct($user_id,$fullName,$email,$password,$phoneNr)
    {
        parent::__construct($user_id,$fullName,$email,$password,$phoneNr);
    }



public function setSession(){
    $_SESSION['role']=0;
}

}