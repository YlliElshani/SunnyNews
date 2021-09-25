<?php

    class ArticleReport{
        private $name;
        private $email;
        private $phoneNr;
        private $category;
        private $message;

            public function __construct($name,$email,$phoneNr,$category,$message)
            {   
                $this->name=$name;
                $this->email=$email;
                $this->phoneNr=$phoneNr;
                $this->category=$category;
                $this->message=$message;
            }

            public function getName(){
                return $this->name;
            }

            public function getEmail(){
                return $this->email;
            }

            public function getPhoneNr(){
                return $this->phoneNr;
            }

            public function getCategory(){
                return $this->category;
            }

            public function getMessage(){
                return $this->message;
            }
    }