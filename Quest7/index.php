<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 7</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 7'>
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
      session_name("users"); 
      session_start(); 
      date_default_timezone_set('UTC');
    ?>

    <?php
    if(!isset($_POST["password"])){
      $_SESSION["cas2"] = date("His");
    }
    ob_start(); echo "<center>
    <div class='nadpis'> <h1> Jarda si heslo hlídá v souboru. Ale protože je zdatný Ajťák udělal si v php skript co vypisuje délku jména.</h1> </div>
            
            
                 <div class='psani'> <h1>Vložte jméno: </h1> </div>
                 <form action=\"/HackThisPrumka/Quest7/jmeno.php\" method=\"post\">
                 <div class ='jmeno'> <input type=\"text\" name=\"jmeno\" value = \"\" placeholder=\"Jméno\"><br><br> </div class='jmeno'>
                 <div class='tlacitko'> <input type=\"submit\" value=\"Odeslat\"></form></br> </div>


                 
                <div class='psani'> <h1>PŘIHLÁŠENÍ</h1> <br><form action=\"/HackThisPrumka/Quest7/index.php\" method=\"post\">
                <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
                <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
                <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>"; 
                
                if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("akjsdkjandkjh4a64s7a6.txt"))
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
          </div> <h2> Gratuluji, dokončil jsi úkol číslo 7!</h2>";
          $link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

          if (!$link) {
          echo "Chyba při připijení do db";
          }

          $sql='SELECT username FROM ukoly WHERE username ="'. $_SESSION['username'] . '"';
        if($vysledek = mysqli_query($link,$sql))
        {
          if(mysqli_num_rows($vysledek)>0) 
          {
            $sql = 'SELECT ID,Basic7 FROM ukoly WHERE username = "'. $_SESSION['username'] . '"';
            if($vysledek = mysqli_query($link,$sql))
            {
              if(mysqli_num_rows($vysledek)>0) 
              {
                $Value = $vysledek->fetch_object();
                if($Value->Basic7 == NULL)
                {
                  $cas1 = date("His");
                  $cas = $cas1 - $_SESSION["cas2"];
                  $casik = date("His", $cas);
                  $uzivatel = $_SESSION["username"];
                  $_SESSION["cas2"] = "";
                  $sql = 'UPDATE ukoly SET Basic7 = ' .$casik. ' WHERE ID = ' . $Value->ID;
                  if(mysqli_query($link,$sql))
                  {
                    echo "Postup Uložen.";
                  }
                  else
                  {
                    echo "Už si úkol dokončil.";
                  }
                }
                else{
                  echo "Už si úkol dokončil.";
                }
              }
            }

          }
          else
          {
              $cas1 = date("His");
              $cas = $cas1 - $_SESSION["cas2"];
              $casik = date("His", $cas);
              $uzivatel = $_SESSION["username"];
              $_SESSION["cas2"] = "";
              $sql = "INSERT INTO ukoly (username, Basic7) VALUES ('$uzivatel', $casik)";
            if(mysqli_query($link,$sql))
            {
              echo "Postup Uložen.";
            }
            else
            {
              echo mysqli_error($link);
            }
          }
        }
            }
                ?>
        </center>
    </body>
</html>