<?php
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else {
    header("Location:../views/index.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['email'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password) != null) {
            header('Location:../views/home.php');
        } else
            header("Location:../views/index.php");
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $person=null;
        $users=VarExample::getUsers();
        foreach($users as $user){
            if ($user=['username']==$username && $user=['password']==$password) {
                if ($user['role']=1) {
                    $person=new AdminUser($user['user_id'],$fullName=['fullName'],$email=['email'],$password=['password'],$phoneNr=['phoneNr']);
                }else{
                    $person=new SimpleUser($user['user_id'],$fullName=['fullName'],$email=['email'],$password=['password'],$phoneNr=['phoneNr']);
                }
            }
        }
        if ($person!=null) {
            $person->setSession();
        }
        return $person;
    }
}

    class RegisterLogic
    {
        public function __construct()
        {
        }

        public function registerUser()
        {
        }
    }
