<?php

if (isset($_POST['submit'])){

    $username= $_POST['username'];
    $pwd= $_POST['pwd'];
    $pwdrepeate= $_POST['pwdrepeat'];
    $email= $_POST['email'];

    include '../classes/Dbh.class.php';
    include '../classes/Signup.class.php';
    include '../classes/Signupcontr.class.php';

    $signup= new Signupcontr($username,$pwd,$pwdrepeat,$email);

    $signup->signupUser();
    
    header("location: ../index.php?error=none");
}