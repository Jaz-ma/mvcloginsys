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
<body style='height : 100vh;' class="d-flex flex-column justify-content-center align-items-center bg-info " >
<h1>Log in</h1>    
<form class='d-flex flex-column bg-primary p-3' action="login.php" method="post">
        <label class="text-secondary my-1" for="username">Username</label>
        <input type="text" name ="username" required>
        <label class="text-secondary my-1" for="password">Password</label>
        <input type="password" name ="pwd" required>      
        <button class="btn btn-info" type="submit" name="submit">Log In</button>      
    </form>
    <h1>Sign up</h1>    

    <form class='d-flex flex-column bg-primary p-3' action="login.php" method="post">
        <label class="text-secondary my-1" for="username">Username</label>
        <input type="text" name ="username" required>
        <label class="text-secondary my-1" for="password">Password</label>
        <input type="password" name ="pwd" required>
        <label class="text-secondary my-1" for="password">Retype Password</label>
        <input type="password" name ="pwdrepeat" required>
        <button class="btn btn-info" type="submit" name="submit"> Sign up</button>      
    </form>
  

    

</body>
</html>