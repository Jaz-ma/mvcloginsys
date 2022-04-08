<?php
session_start();
class Edit_profilecontr extends Edit_profile{
    private $username;
    private $newusername;
    private $pwd;


    public function __construct($newusername,$pwd)
    {
        $this->newusername = $newusername;
        $this->pwd =  $pwd;
        $this->username =  $_SESSION["userun"];

    }

    public function editUser(){
        if ($this->emptyInput()== false) {
            header('location: ../profile.php?error=emptyinput');
            exit();
        }

       
        $this->changeUsername($this->username,$this->newusername,$this->pwd);
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

    // private function checkusernamechange(){
    //     if()
    // }
}