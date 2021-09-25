<?php

    include_once 'C:\xampp\htdocs\WebPracticeProject\buisnessLogic\SuperClass\contactClass.php';
    include_once 'C:\xampp\htdocs\WebPracticeProject\buisnessLogic\Mapper\contactMapper.php';

    if (isset($_POST['submitBtn'])) {
        $contact=new ContactLogic($_POST);
        $contact->insertData();
    }

    class ContactLogic{

        private $name;
        private $email;
        private $phoneNr;
        private $category;
        private $message;

            function __construct($formData)
            {
                $this->name=$formData['name'];
                $this->email=$formData['email'];
                $this->phoneNr=$formData['phoneNr'];
                $this->category=$formData['category'];
                $this->message=$formData['message'];
            }

            public function insertData(){
                $contact=new Contact($this->name,$this->email,$this->phoneNr,$this->category,$this->message);
                $mapper=new ContactMapper();
                
                $mapper->insertForm($contact);
                sleep(2);
                header('Location:../../HTMLfiles/Contact Us.php?success=formSent');
            }
    }
