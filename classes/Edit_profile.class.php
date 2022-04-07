<?php

class Edit_profile extends Dbh{

  protected function changeUsername($username,$newusername,$password){
        $stmt= $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_username = ?');
        
        
        if(!$stmt->execute(array($username))){
            $stmt = null;
            header("localtion: ../profile.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){

            $stmt = null;
            header('location: ../profile.php?error=usernotfound');
            exit();
        }

        $hashedpwd =$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($password,$hashedpwd[0]["users_pwd"]);


        if($checkpwd== false){
            $stmt=null;
            header('location: ../profile.php?error=incorrectpassword');
            session_start();

            $_SESSION['Failed']="Something has gone wrong";
            exit();
        }
        elseif($checkpwd==true){
            $stmt= $this->connect()->prepare('UPDATE users SET users_username = ? WHERE users.users_pwd = ?;');

            if(!$stmt->execute(array($newusername,$password))){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                session_start();

                $_SESSION['Failed']="Something has gone wrong";
                exit();
            }          

            session_start();

            $_SESSION['Success']="Name Changed Successfully";
            $stmt = null;

        }


    }
}