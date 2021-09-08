<?php

    abstract class Person{
        private $user_id;
        private $fullName;
        private $email;
        private $password;
        private $phoneNr;

            public function __construct($user_id,$fullName,$email,$password,$phoneNr)
            {
                $this->user_id=$user_id;
                $this->fullName=$fullName;
                $this->email=$email;
                $this->password=$password;
                $this->phoneNr=$phoneNr;
            }

        abstract function setSession();
    }

    class AdminUser extends Person{
        
            public function __construct($user_id,$fullName,$email,$password,$phoneNr)
            {
                parent::__construct($user_id,$fullName,$email,$password,$phoneNr);
            }
        
        public function setSession(){
            $_SESSION['role']=1;
        }
    }


    class SimpleUser extends Person{
            
            public function __construct($user_id,$fullName,$email,$password,$phoneNr)
            {
                parent::__construct($user_id,$fullName,$email,$password,$phoneNr);
            }

        public function setSession(){
            $_SESSION['role']=0;
        }
        
    }