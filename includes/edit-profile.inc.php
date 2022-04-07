<?php

if(isset($_POST["submit"])){
    $username = $_POST["new_name"];
    $pwd = $_POST["pwd"];

    include 'class-autoload.inc.php';


      $editname= new Edit_profilecontr($username,$pwd);

    $editname->editUser();
    
    header("location: ../profile.php?name_changed");

}