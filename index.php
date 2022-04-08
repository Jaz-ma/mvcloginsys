<?php

include "includes/class-autoload.inc.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home </title>
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
            $profileurl = $_SESSION['userun'];
            ?>

        <li><a href="profile.php?user=<?php echo $profileurl ?>"><?php echo $_SESSION['userun'] ?> </a></li>
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

<div style='height : 100vh; width : 100vw;' class="d-flex  justify-content-center align-items-center bg-info " >

<form class='d-flex flex-column bg-primary m-3 p-3 ' action="includes/login.inc.php" method="post">
    <h1>Log in</h1>
       
        <label class="text-secondary my-1" for="username">Username</label>
        <input type="text" name ="username" required>
        <label class="text-secondary my-1" for="password">Password</label>
        <input type="password" name ="pwd" required>      
        <button class="btn btn-info" type="submit" name="submit">Log In</button>      
    </form>


    <form class='d-flex flex-column bg-primary m-3 p-3' action="includes/signup.inc.php" method="post">
    <h1>Sign up</h1>    

      <label class="text-secondary my-1" for="username">Email</label>
        <input type="email" name ="email" required>
        <label class="text-secondary my-1" for="username">Username</label>
        <input type="text" name ="username" required>
        <label class="text-secondary my-1" for="password">Password</label>
        <input type="password" name ="pwd" required>
        <label class="text-secondary my-1" for="password">Retype Password</label>
        <input type="password" name ="pwdrepeat" required>
        <button class="btn btn-info" type="submit" name="submit"> Sign up</button>      
    </form>
</div>

    
  

    

</body>
</html>