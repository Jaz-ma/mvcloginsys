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
            header('location: ../profile.php?error=passwordnotfound');
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

            
            $stmt= $this->connect()->prepare('UPDATE users SET users_username = ? WHERE users_id = ?;');

            if(!$stmt->execute(array($newusername,$user_id[0]["users_id"]))){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                session_start();

                $_SESSION['Failed']="Something has gone wrong";
                exit();
            }    
            if($stmt->rowCount() == 0){

                $stmt = null;
                header('location: ../profile.php?error=samename');
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
           
            $checknewname =$stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($checknewname);
            // die();
              if(!$checknewname[0]['users_username'] == $newusername){
                $stmt = null;
                header("localtion: ../profile.php?error=stmtfailed");
                session_start();

                $_SESSION['Failed']="Something has gone wrong";
                exit();
              }  
              else{
            session_start();

                $_SESSION['Success']="Name Changed Successfully";
                $_SESSION["userun"] = $newusername;
                $stmt = null;
               

              }

            

        }


    }

}