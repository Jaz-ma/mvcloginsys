<?php
session_start();
class Delete_profilecontr extends Delete_profile{
    private $username;
  
    private $pwd;


    public function __construct($pwd)
    {
      
        $this->pwd =  $pwd;
        $this->username =  $_SESSION["userun"];

    }

public function deleteUser(){
        // if ($this->emptyInput()== false) {
        //     header('location: ../profile.php?error=emptyinput');
        //     exit();
        // }

       
        $this->deleteProfile($this->username,$this->pwd);
    }

    private function emptyInput(){
        
        if(empty($this->pwd)){
            $result = false;
        }
        else{
            $result = true; 
        }
        return $result;
    }
}