<?php

    include_once 'C:\xampp\htdocs\WebPracticeProject\buisnessLogic\Mapper\RContactMapper.php';
    include_once 'C:\xampp\htdocs\WebPracticeProject\buisnessLogic\SuperClass\contactArticle.php';

    if (isset($_POST['submitBtn'])) {
        $contact=new rContact($_POST);
        $contact->insertData();
    }

    class rContact{
        
        private $name;
        private $email;
        private $phoneNr;
        private $category;
        private $message;

        function __construct($formdata)
        {   
            $this->name=$formdata['name'];
            $this->email=$formdata['email'];
            $this->phoneNr=$formdata['phoneNr'];
            $this->category=$formdata['category'];
            $this->message=$formdata['message'];
        }

        public function insertData(){
            $contact=new ArticleReport($this->name,$this->email,$this->phoneNr,$this->category,$this->message);
            $mapper=new rContactMapper($contact);

            $mapper->insertForm($contact);

            sleep(2);

            header('Location:../../HTMLfiles/NewsDetail.php?success=reportSent');
        }
    }