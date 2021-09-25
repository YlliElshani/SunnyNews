<?php

    require_once 'dbh.class.php';

    class ContactMapper extends Dbh{

        private $conn;
        private $query;

            public function __construct()
            {
                $this->conn=$this->getConnection();
            }

            
            public function getContactById($id){
                $this->query = "SELECT * from contactforms where form_id=:form_id";
                $statement = $this->conn->prepare($this->query);
                $statement->bindParam(":form_id", $id);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function getAllForms(){
                $this->query = "SELECT * from contactforms";
                $statement = $this->conn->prepare($this->query);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function deleteForm($id){
                $this->query = "DELETE from contactforms where form_id=:form_id";
                $statement = $this->conn->prepare($this->query);
                $statement->bindParam(":form_id", $id);
                $statement->execute();
            }

            public function insertForm(\Contact $contact){
                $query="INSERT INTO contactforms (name,email,phoneNr,category,message) VALUES(:name,:email,:phoneNr,:category,:message)";
                $statement = $this->conn->prepare($query);

                $name=$contact->getName();
                $email=$contact->getEmail();
                $phoneNr=$contact->getEmail();
                $category=$contact->getCategory();
                $message=$contact->getMessage();

                $statement->bindparam(":name",$name);
                $statement->bindparam(":email",$email);
                $statement->bindparam(":phoneNr",$phoneNr);
                $statement->bindparam(":category",$category);
                $statement->bindparam(":message",$message);
                $statement->execute();

            }

    }