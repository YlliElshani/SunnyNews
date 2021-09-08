<?php

include_once 'dbh.class.php';

    class Test extends Dbh{

        public function getUsers(){
            $sql="SELECT * FROM users";

            include_once 'dbh.class.php';

            $stmt=$this->connect($host,$dbName,$userId)->query($sql);

                while($row=$stmt->fetch()){
                    echo $row['fullName'].'<br/>';
                }
        }
    }