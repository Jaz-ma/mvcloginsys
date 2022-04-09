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
    <title>Forgotten Password </title>
</head>
<body >



<div style='height : 100vh; width : 100vw;' class="d-flex  justify-content-center align-items-center bg-info " >

<form class='d-flex flex-column bg-primary m-3 p-3 ' action="includes/" method="post">
    <h4> Write down your user email </h4>
       
        <label class="text-light my-1" for="username">Email</label>
        <input type="email" name ="email" required>   
        <button class="btn btn-info my-3" type="submit" name="submit">Submit</button>      
    </form>


    <form class='d-flex flex-column bg-primary m-3 p-3' action="includes/signup.inc.php" method="post">
    <h1>New Password</h1>    

      
       
        <label class="text-light my-1" for="password">New Password</label>
        <input type="password" name ="pwd" required>
        <label class="text-light my-1" for="password">Retype New Password</label>
        <input type="password" name ="pwdrepeat" required>
        <button class="btn btn-info my-3" type="submit" name="submit"> Set New Password</button>      
    </form>
</div>

    
  

    

</body>
</html>