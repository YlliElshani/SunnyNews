<?php

    class Dbh{
        private $host="localhost";
        private $user="root";
        private $password="";
        private $dbName="sunnynews";


            protected function connect($host,$dbName,$user_id){
                $dsn='mysql:host='.$this->host.';dbname='.$this->dbName;

                $pdo=new PDO($dsn,$this->user,$this->pwd);

                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

                $statement=$this->connection->prepare("SELECT FROM users WHERE user_id=:id");
                $statement->bindparam(":id",$user_id);
                $statement->execute();

                return $pdo;
            }
    }