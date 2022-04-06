<?php

class Login extends Dbh{

    protected function getUser($username,$password){
        $stmt= $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_username = ? OR users_email= ?;');
        
        
        if(!$stmt->execute(array($username,$username))){
            $stmt = null;
            header("localtion: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){

            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }

        $hashedpwd =$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($password,$hashedpwd[0],["users_pwd"]);


        if($checkpwd== false){
            $stmt=null;
            header('location: ../index.php?error=incorrectpassword');
            exit();
        }
        elseif($checkpwd==true){
            $stmt= $this->connect()->prepare('SELECT * FROM users WHERE users_username = ? OR users_email= ? AND users_pwd = ?;');

            if(!$stmt->execute(array($username,$username,$password))){
                $stmt = null;
                header("localtion: ../index.php?error=stmtfailed");
                exit();
            }
          
            if($stmt->rowCount() == 0){

                $stmt = null;
                header('location: ../index.php?error=usernotfound');
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();

            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["userun"] = $user[0]["users_username"];
            $stmt = null;

        }


    }
}