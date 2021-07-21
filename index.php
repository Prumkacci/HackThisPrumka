<?php
$title = "Krahula";
include "mysqli_connect.php";
include "header.php";
  if(isset($_SESSION['username'])){     
  echo "Přihlášen: ".$_SESSION['username']."/<a href='logout.php'>Odhlásit</a>";
  header ("location:user.php");   
  }
  else{
      echo "
      <a class='reg_a' href='registrace.php'>Zaregistruj se</a>
      <a class='reg_a1' href='prihlaseni.php'>Přihlaš se</a>"; 
  }


include "footer.php";
?>