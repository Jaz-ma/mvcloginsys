<?php

if (isset($_POST['submit'])){

    $username= $_POST['username'];
    $pwd= $_POST['pwd'];
    

    

    include 'class-autoload.inc.php';

    $login= new Logincontr($username,$pwd);

    $login->loginUser();
    
    header("location: ../index.php?error=none");
}