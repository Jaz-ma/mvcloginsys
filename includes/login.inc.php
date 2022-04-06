<?php

if (isset($_POST['submit'])){

    $username= $_POST['username'];
    $pwd= $_POST['pwd'];
    

    

    include 'class-autoload.inc.php';

    $loginup= new Logincontr($username,$pwd,$pwdrepeat,$email);

    $loginup->loginUser();
    
    header("location: ../index.php?error=none");
}