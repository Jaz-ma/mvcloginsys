<?php

class Signup extends Dbh {
    protected function checkuser($username,$email){
        $stmt= $this->connect()->prepare('SELECT users_id FROM users WHERE users_username =? OR users_email=?;');

        if(!$stmt->execute(array($username,$email))){
            $stmt = null;
            header("localtion: ../index.php?error=stmtfailed");
            exit();
        }
        

        if($stmt->rowCount() > 0){
            $resultcheck = false;
        }
        else{
            $resultcheck = true;
        }
        return $resultcheck;

    }

    protected function setUser($username,$password,$email){
        $stmt= $this->connect()->prepare('INSERT INTO users (users_username,users_pwd,users_email) VALUES (?,?,?);');
        
        $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($username,$hashedpwd,$email))){
            $stmt = null;
            header("localtion: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }
}