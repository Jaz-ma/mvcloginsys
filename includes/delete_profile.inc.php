<?php
if(isset($_POST["submit"])){
    
    $pwd = $_POST["pwd"];

    include 'class-autoload.inc.php';


      $deleteprofile= new Delete_profilecontr($pwd);

    $deleteprofile->deleteUser();
    
    header("location: logout.inc.php");

    exit();

}

echo "failed";