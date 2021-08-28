<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 6</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 6'>
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
    ob_start(); echo "<center> 
          <div class='nadpis'> <h1>Vymýšlivý Jareček si název souboru ve kterém se heslo nachází zašifroval.</h1>
          <h1>Jarda si ještě zkusil vytvořit script co mu zobrazí kalendář podle roku co se zadá.</h1> </div>
            
              <br><form action=\"/HackThisPrumka/Quest6/kalendar.php\" method=\"post\">
              <div class='psani'> <h1>KALENDÁŘ</h1> </div>
              <div class='jmeno'> <input type=\"text\" name=\"kalendar\" value = \"\" placeholder=\"Zadej Rok\"><br><br> </div>
              <div class='tlacitko'> <input type=\"submit\" value=\"Odeslat\"> </div></form>

              <div class='psani'> <h1>PŘIHLÁŠENÍ</h1> <br><form action=\"/HackThisPrumka/Quest6/index.php\" method=\"post\">
              <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
              <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
              <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>";           
            if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("hjgfvasafvdv1a5fgfdklgafasga4fg65d.txt"))
            {
              ob_end_clean(); echo"<div class='confetti'>
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
          </div> <h2> Gratuluji, dokončil jsi úkol číslo 6!</h2>";
            }
                ?>
        </center>
    </body>
</html>