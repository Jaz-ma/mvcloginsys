<?php

class Signupcontr extends Signup{
    private $username;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($username,$pwd,$pwdrepeat,$email)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;

    }

    public function signupUser(){
        if ($this->emptyInput()== false) {
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        if ($this->invalidusername()== false) {
            header('location: ../index.php?error=invalidusername');
            exit();
        }

        if ($this->invalidemail()== false) {
            header('location: ../index.php?error=invalidemail');
            exit();
        }

        if ($this->pwdmatch()== false) {
            header('location: ../index.php?error=pwddontmatch');
            exit();
        }

        if ($this->userexists()== false) {
            header('location: ../index.php?error=useralreadyexists');
            exit();
        }
       
        $this->setUser($this->username,$this->pwd,$this->email);
    }

    private function emptyInput(){
        
        if(empty($this->username)|| empty($this->pwd)|| empty($this->pwdrepeat)|| empty($this->email)){
            $result = false;
        }
        else{
            $result = true; 
        }
        return $result;
    }

    private function invalidusername(){

        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }
        else{
            $result = true;
        }
      return $result;  

    }

    private function invalidemail(){

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
      return $result;  

    }
    private function pwdmatch(){

        if($this->pwd !== $this->pwdrepeat){
            $result = false;
        }
        else{
            $result = true;
        }
      return $result;  

    }
    private function userexists(){

        if(!$this->checkuser($this->username,$this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
      return $result;  

    }
}