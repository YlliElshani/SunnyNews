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

            public function getUsername(){
                return $this->fullName;
            }

            public function getUser_id(){
                return $this->user_id;
            }
            
            public function getEmail(){
                return $this->email;
            }

            public function getPassword(){
                return $this->password;
            }

            public function getPhoneNr(){
                return $this->phoneNr;
            }
        

        abstract function setSession();
    }
