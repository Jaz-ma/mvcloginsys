<?php

include "includes/class-autoload.inc.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
</head>
<body >

<nav>
    <div>
        <h2>
            frogsite
        </h2>
        <ul>
            <a href="#home"><li>home</li></a>
        </ul>

        <div>
            <button>Login</button>

        </div>
    </div>
</nav>
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