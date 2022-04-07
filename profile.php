<?php
session_start();

$user = $_SESSION['userun'];

if(!isset($_SESSION['userun'])){
    header('location: index.php?error=nologin');
}

else{
    

}

include "includes/class-autoload.inc.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $_SESSION['userun'] ?>'s Profile </title>
</head>
<body >

<header class="bg-dark text-light">
<nav class="">
    <div class="main-list">
        <h2>
            frogsite
        </h2>
        <ul class="navlist">
            <li> <a href="index.php">Home</a></li>            
            <li> <a href="">About</a></li>            
            <li> <a href="">Products</a></li>            
            <li> <a href="">Contact</a></li>            
        </ul>
    </div>
    <ul class="navlist">
        <?php

        if(isset($_SESSION["userun"]))
        {

            ?>

        <li><a href="#"><?php echo $_SESSION['userun'] ?> </a></li>
        <li><a href="includes/logout.inc.php" class="logio-btn">Logout</a></li>

        <?php
        }

        else{

            ?>
            <li><a href="#">Sing Up </a></li>
        <li><a href="index.php" class="logio-btn">Login</a></li>
        <?php
        }
        ?>
    </ul>
    
</nav>
</header>

<Section id="Sidebar">
    <div class="wrapper">
    <h1><?php echo $user ?>'s Profile </h1>

    </div>





</Section>

    
  

    

</body>
</html>