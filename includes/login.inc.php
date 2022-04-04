<?php

if (isset($_POST['submit'])){

    $username= $_POST['username'];
    $pwd= $_POST['pwd'];
    $pwdrepeat= $_POST['pwdrepeat'];
    $email= $_POST['email'];

    

    include 'class-autoload.inc.php';

    $signup= new Logincontr($username,$pwd,$pwdrepeat,$email);

    $signup->loginUser();
    
    header("location: ../index.php?error=none");
}