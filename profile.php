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
    <div class="container  bg-light">
    <form action="includes/edit_profile.inc.php" method="post" class="py-4 d-flex flex-column">
  
    <label class=" my-3" for="New_name">Your New Name</label>
        <input type="text" name ="new_name" required>
        <label class=" my-3" for="password">Your Password</label>
        <input type="password" name ="pwd" required>      
        <button class="btn btn-info my-4" type="submit" name="submit">Submit Changes</button> 

  
</form>

<form action="includes/id.inc.php" method="post" class="py-4 d-flex flex-column">
  
       
      <button class="btn btn-info my-4" type="submit" name="submit">get id</button> 


</form>
<?php

        if(isset($_SESSION["Success"]))
        {

            ?>

        <h3 href="#"><?php echo $_SESSION['Success'] ?> </h3>
        

        <?php
        unset($_SESSION['Success']);
        }

        elseif(isset($_SESSION['Failed'])){

            ?>
            <h3>Something went wrong</h3>
        
        <?php
                unset($_SESSION['Failed']);

        }
        ?>
    </div>





</Section>

    
  

    

</body>
</html>