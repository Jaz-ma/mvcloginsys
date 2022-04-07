<?php

if(isset($_POST["submit"])){
    $newusername = $_POST["new_name"];
    $pwd = $_POST["pwd"];

    include 'class-autoload.inc.php';


      $editname= new Edit_profilecontr($newusername,$pwd);

    $editname->editUser();
    
    header("location: ../profile.php?name_changed");

    exit();

}

echo "failed";