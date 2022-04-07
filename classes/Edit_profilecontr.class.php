<?php

class Edit_profilecontr extends Edit_profile{
    private $username;
    private $pwd;


    public function __construct($username,$pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        

    }

    public function editUser(){
        if ($this->emptyInput()== false) {
            header('location: ../profile.php?error=emptyinput');
            exit();
        }

       
        $this->changeUsername($this->username,$this->pwd);
    }

    private function emptyInput(){
        
        if(empty($this->username)|| empty($this->pwd)){
            $result = false;
        }
        else{
            $result = true; 
        }
        return $result;
    }
}