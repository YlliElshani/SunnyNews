<?php
include_once 'AdminUser.php';
include_once 'SimpleUser.php';
include_once 'UserMapper.class.php';
session_start();

if (isset($_POST['submitBtn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
}else if(isset($_POST['registerBtn'])){
    $register = new RegisterLogic($_POST);
    $register->RegisterUser();
}
else {
    header("Location:../HTMLfiles/Register.php");
}

class LoginLogic
{
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['email'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->email, $this->password)) {
            header("Location:../HTMLfiles/Register.php?error=WrongPW");
        } else if ($this->usernameAndPasswordCorrect($this->email, $this->password) != null) {
            header('Location:../HTMLfiles/Homepage.php?success=LoggedIn');
         } //else
        //     header("Location:../HTMLfiles/Register.php?error=SQLError");
    }

    private function variablesNotDefinedWell($email, $password)
    {
        if (empty($email) || empty($password)) {
            return true;
        } 
        return false;

    }

    private function usernameAndPasswordCorrect($email, $password)
    {
        $person=null;
        $userMapper=new userMapper;
        $users=$userMapper->getUserByUsername($email);

        if (is_array($users)|| is_object($users)) {
            foreach($users as $user){
                if ($user=['email']==$email && $user=['password']==$password) {
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
        }
        return $person;
    }
}

    class RegisterLogic
    {
        private $email = "";
        private $password = "";
        private $phoneNr = "";
        private $fullName = "";
    
        public function __construct($formData)
        {
            $this->username = $formData['fullName'];
            $this->email = $formData['email'];
            $this->password = $formData['password'];
            $this->phoneNr = $formData['phoneNr'];
        }

        public function registerUser()
        {
            $user=new SimpleUser($this->fullName,$this->email,$this->password,$this->phoneNr,0);
            $mapper=new UserMapper();
            $mapper->insertUser($user);

            sleep(3);

            header("Location:../HTMLfiles/Homepage.php?success=registered");
        }
    }
