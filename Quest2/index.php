<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 2</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 2'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
    <?php
    $heslo2 = "";
    ob_start(); echo "<center>
          <div class='nadpis'>Bezpečný Jarda si tuto stránku zabezpečil pomocí hesla v souboru. Bohužel zapoměl soubor nahrát.</div>
          </center> <div class='psani'> <h1>PŘIHLÁŠENÍ</h1> </div> 
            
            
              <br><form action=\"/HackThisPrumka/Quest2/index.php\" method=\"post\">
              <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
            
             <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
             <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>"; 
            if ( isset($_POST["password"]) && $_POST["password"] == $heslo2)
            {
              ob_end_clean(); echo
              "<div class='confetti'>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
          </div> <h2> Gratuluji, dokončil jsi úkol číslo 2!</h2>
              
              ";
            }
                ?>
        
    </body>
</html>