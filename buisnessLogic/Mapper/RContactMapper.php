<?php

    include_once 'dbh.class.php';

    class rContactMapper extends Dbh{

        private $conn;
        private $query;

            public function __construct()
            {
                $this->conn=$this->getConnection();
            }

            public function getAllReports(){
                $query="SELECT * FROM articlereport";
                $statement=$this->conn->prepare($this->query);
                $statement->execute();
                return $result=$statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function insertForm(\ArticleReport $contact){
                $query="INSERT INTO articlereport (name,email,phoneNr,category,message) VALUES(:name,:email,:phoneNr,:category,:message)";
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