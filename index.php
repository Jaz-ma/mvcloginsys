<?php

include "includes/class-autoload.inc.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  
  $userobject = new Usersview();
  $userobject->showUser("Yacine");
  
  $userobject2 = new Userscontr();
  $userobject2->createUser("Kai","Nsit","2000-08-12")
  ?>  
</body>
</html>