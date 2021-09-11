<?php

include_once "dbh.class.php";

class UserMapper extends Dbh
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn=$this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query="SELECT * FROM users WHERE user_id=:id";
        
        $statement=$this->conn->prepare($this->$query);
        $statement->bindparam(":id",$userId);
        $statement->execute();

        return $result=$statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByUsername($email)
    {

        $this->query="SELECT * from users where email=:email";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUserByEmail($email)
    {
        $query="SELECT * FROM users WHERE email=:email";
        
        $statement=$this->conn->prepare($query);
        $statement->bindparam(":email",$email);
        $statement->execute();

        return $result=$statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByPhoneNr($phoneNr)
    {
        $query="SELECT * FROM users WHERE phoneNr=:phoneNr";
        
        $statement=$this->conn->prepare($query);
        $statement->bindparam(":phoneNr",$phoneNr);
        $statement->execute();

        return $result=$statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByPassword($password)
    {
        $query="SELECT * FROM users WHERE password=:password";
        
        $statement=$this->conn->prepare($query);
        $statement->bindparam(":password",$password);
        $statement->execute();

        return $result=$statement->fetch(PDO::FETCH_ASSOC);
    }

    
    public function getUserByRole($role)
    {
        $query="SELECT * FROM users WHERE role=:role";
        
        $statement=$this->conn->prepare($query);
        $statement->bindparam(":role",$role);
        $statement->execute();

        return $result=$statement->fetch(PDO::FETCH_ASSOC);
    }


    public function getAllUsers()
    {
        $query="SELECT * FROM users";
        
        $statement=$this->conn->prepare($query);
        $statement->bindparam();
        $statement->execute();

        return $result=$statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insertUser(\SimpleUser $user)
    {
        $query="INSERT INTO users(user_id,fullName,email,password,phoneNr,role) VALUES(:fullName,:email,:passowrd,:phoneNr,:role)";
        
        $statement=$this->conn->prepare($query);

        $username=$user->getUsername();
        $email=$user->getEmail();
        $password=$user->getPassword();
        $phoneNr=$user->getPhoneNr();
        //$role=$user->getRole();

        $passwordEncrypted=password_hash($password,PASSWORD_BCRYPT);

        $statement->bindparam(":fullName",$username);
        $statement->bindparam(":email",$email);
        $statement->bindparam(":password",$passwordEncrypted);
        $statement->bindparam(":phoneNr",$phoneNr);
        //$statement->bindparam(":role",$role);

        $statement->execute();
    }

    public function deleteUser($userId)
    {
    }
}
