<?php

class Delete_profile extends Dbh{
    protected function deleteProfile($username,$password){
        $stmt= $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_username =?');

        if(!$stmt->execute(array($username))){
            $stmt = null;
            header("location: ../profile.php?error=stmtfailed");
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
            exit();
        }
        elseif($checkpwd==true){
            $stmt= $this->connect()->prepare('SELECT users_id FROM users WHERE users_username = ?');
            if(!$stmt->execute(array($username))){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                exit();
            }
    
            if($stmt->rowCount() == 0){
    
                $stmt = null;
                header('location: ../profile.php?error=passwordnotfound');
                exit();
            }
            $user_id= $stmt->fetchAll(PDO::FETCH_ASSOC);

            
            $stmt= $this->connect()->prepare('DELETE FROM users WHERE users_id = ?;');

            if(!$stmt->execute(array($user_id[0]["users_id"]))){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                session_start();

                $_SESSION['Failed']="Something has gone wrong";
                exit();
            }    
         
                 
            
            $stmt= $this->connect()->prepare('SELECT users_username FROM users WHERE users_id = ?');
            if(!$stmt->execute(array($user_id[0]["users_id"]))){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                session_start();

                $_SESSION['Failed']="Something has gone wrong";
                exit();
            }
           
            if($stmt->rowCount() == 0){
                session_start();

                $_SESSION['user_deleted']="user deleted";
                $stmt = null;
                
                
            }

            else{
                session_start();

                $_SESSION['Failed']="Something has gone wrong";
                exit();
            }

        }

    }
}