<?php 
session_name("users"); 
session_start(); 
include ("mysqli_connect.php");
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>User</title>
</head>
<body>
    </div>
    <?php
    
    

  if(isset($_SESSION['username'])){  
    echo "Přihlášen: <a href='user.php'>".$_SESSION['username']."</a> | <a href='logout.php'>Odhlásit</a>";
    include "levely.php";
    
      }
      else{
        header ("location:index.php");
        exit;
      }
      ?>
<?php

 include ("footer.php")
?>