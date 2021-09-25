<?php

    include_once 'dbh.class.php';

    class AdvertMapper extends Dbh{

        private $query;
        private $conn;

            public function __construct()
            {
                $this->conn=$this->getConnection();
            }

            public function getAdvertById($id){
                $query="SELECT * FROM advertforms WHERE id=:id";
                $statement=$this->conn->prepare($query);
                $statement->bindParam(":id",$id);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function getAllAdverts(){
                $query="SELECT * FROM advertforms";
                $statement=$this->conn->prepare($query);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function deleteAdvert($id){
                $query="DELETE FROM advertforms WHERE id:=id";
                $statement=$this->conn->prepare($query);
                $statement->bindParam(":id",$id);
                $statement->execute();
            }

            public function insertAdvert(\Advert $advert){

                $query="INSERT INTO advertforms(cname,email,phoneNr,cLength,adType,moreInfo) VALUES(:cname,:email,:phoneNr,:cLength,:adType,:moreInfo)";
                $statement=$this->conn->prepare($query);

                $cname=$advert->getCName();
                $email=$advert->getEmail();
                $phoneNr=$advert->getPhoneNr();
                $cLength=$advert->getClength();
                $adType=$advert->getAdType();
                $moreInfo=$advert->getMoreInfo();

                $statement->bindParam("cname",$cname);
                $statement->bindParam("email",$email);
                $statement->bindParam("phoneNr",$phoneNr);
                $statement->bindParam("cLength",$cLength);
                $statement->bindParam("adType",$adType);
                $statement->bindParam("moreInfo",$moreInfo);

                $statement->execute();
            }

    }