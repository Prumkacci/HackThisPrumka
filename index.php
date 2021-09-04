<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>HackThisPrumka</title>
    <meta charset='utf-8'>
    <meta name='description' content='Hlavni menu'>
    <meta name='keywords' content='menu, vyber, questy'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
            <?php
include "mysqli_connect.php";
include "header.php";
  if(isset($_SESSION['username'])){     
  echo "Přihlášen: ".$_SESSION['username']."/<a href='logout.php'>Odhlásit</a>";
  header ("location:user.php");   
  }
  else{
    include "prihlaseni.php";
      echo "
      <a class='reg_a' href='registrace.php'>Zaregistruj se</a>"; 
  }
  include "levely.php";

include "footer.php";
?>
    </body>
</html>