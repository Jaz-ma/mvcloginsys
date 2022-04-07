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
    <form action="includes/edit-profile.inc.php" method="POST" class="py-4">
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Your Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="new_name" class="form-label">Your New Name</label>
    <input type="text" name="new_name" class="form-control" id="new_name" aria-describedby="new_name" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  
</form>
<?php

        if(isset($_SESSION["Success"]))
        {

            ?>

        <h3 href="#"><?php echo $_SESSION['Success'] ?> </h3>
        

        <?php
        }

        else{

            ?>
            <h3>Something went wrong</h3>
        
        <?php
        }
        ?>
    </div>





</Section>

    
  

    

</body>
</html>