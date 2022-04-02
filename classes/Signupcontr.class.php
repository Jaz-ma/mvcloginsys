<?php

class Signupcontr{
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

    private function emptyInput(){
        
        if(empty($this->username)|| empty($this->pwd)|| empty($this->pwdrepeat)|| empty($this->email)){
            $result = false;
        }
        else{
            $result = true; 
        }
    }

    private function invalidusername(){

        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }
        else{
            $result = true;
        }
    }
}