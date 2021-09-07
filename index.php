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
        <strong><center>HackThisPrumka</center></strong>
        <?php
        session_name("users"); 
        session_start(); 
        if(isset($_SESSION["username"]))
        {
          echo "Přihlášen jako: <a href='index.php'>" . $_SESSION["username"] . "</a> | <a href='logout.php'>Odhlásit se</a>" ;
          include "levely.php";
        }
        else
        {
          include "prihlaseni.php";
        } 
?>

      <footer>
      © Ondřej
      </footer>
    </body>
</html>