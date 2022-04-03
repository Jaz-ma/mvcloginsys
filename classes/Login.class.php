<?php

class Login extends Dbh{

    protected function getUser($username,$password){
        $stmt= $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_username = ? OR users_email= ?;');
        
        
        if(!$stmt->execute(array($username,$password))){
            $stmt = null;
            header("localtion: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){

            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }

    }
}