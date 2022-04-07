<?php

class Edit_profile extends Dbh{

  protected function changeUsername($username,$password){
        $stmt= $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_username = ?');
        
        
        if(!$stmt->execute($username)){
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
        $checkpwd = password_verify($password,$hashedpwd[0]["users_pwd"]);


        if($checkpwd== false){
            $stmt=null;
            header('location: ../index.php?error=incorrectpassword');
            exit();
        }
        elseif($checkpwd==true){
            $stmt= $this->connect()->prepare('UPDATE users SET users_username = ? WHERE users.users_pwd=?');

            if(!$stmt->execute(array($username,$password))){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                exit();
            }
          
          

            

            session_start();

            $_SESSION['Success']="Name Changed Successfully";
            $stmt = null;

        }


    }
}