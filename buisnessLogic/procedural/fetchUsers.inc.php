<?php

    class VarExample{

        private static $loginAdminUser = array("user_id" => "1", "fullName" => "arber", "password" => "kadriu", 'role' => '1', 'phoneNr' => '22',"email"=>"akm@gmail.com");
        private static $loginSimpleUser = array("user_id" => "2", "fullName" => "test", "password" => "test", 'role' => '0', 'phoneNr' => '25',"email"=>"akm1@gmail.com");
        private static $loginSimpleUser1 = array("user_id" => "3", "fullName" => "simple", "password" => "simple", 'role' => '0', 'phoneNr' => '32',"email"=>"akm2@gmail.com");
        private static $loginSimpleUser2 = array("user_id" => "4", "fullName" => "first", "password" => "first", 'role' => '0', 'phoneNr' => '24',"email"=>"akm3@gmail.com");
        private static $loginSimpleUser3 = array("user_id" => "5", "fullName" => "second", "password" => "second", 'role' => '0', 'phoneNr' => '57',"email"=>"akm4@gmail.com");
        private static $loginSimpleUser4 = array("user_id" => "6", "fullName" => "third", "password" => "third", 'role' => '0', 'phoneNr' => '61',"email"=>"akm5@gmail.com");

        private static $users;

        public static function getUsers(){
            self::$users=array(self::$loginAdminUser,self::$loginSimpleUser,
            self::$loginSimpleUser1,self::$loginSimpleUser2,self::$loginSimpleUser3,self::$loginSimpleUser4);

            return self::$users;
        }

    }