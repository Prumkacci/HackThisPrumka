<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 3</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 3'>
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
          <div class='nadpis'>Opatrný Jarouš si tuto stránku zabezpečil pomocí hesla v souboru. Tentokrát ho dokonce nahrál.</div>
          </center> <div class='psani'> <h1>PŘIHLÁŠENÍ</h1> </div>
            
                <br><form action=\"/HackThisPrumka/Quest3/index.php\" method=\"post\">
                <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
            
                <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
                <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>";  
            if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("heslo"))
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
          </div> <h2> Gratuluji, dokončil jsi úkol číslo 3!</h2>";

          $link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

              if (!$link) {
              echo "Chyba při připijení do db";
              }

              $sql='SELECT username FROM ukoly WHERE username ="'. $_SESSION['username'] . '"';
            if($vysledek = mysqli_query($link,$sql))
            {
              if(mysqli_num_rows($vysledek)>0) 
              {
                $sql = 'SELECT ID,Basic3 FROM ukoly WHERE username = "'. $_SESSION['username'] . '"';
                if($vysledek = mysqli_query($link,$sql))
                {
                  if(mysqli_num_rows($vysledek)>0) 
                  {
                    $Value = $vysledek->fetch_object();
                    if($Value->Basic3 == NULL)
                    {
                      $cas1 = date("His");
                      $cas = $cas1 - $_SESSION["cas2"];
                      $casik = date("His", $cas);
                      $uzivatel = $_SESSION["username"];
                      $_SESSION["cas2"] = "";
                      $sql = 'UPDATE ukoly SET Basic3 = ' .$casik. ' WHERE ID = ' . $Value->ID;
                      if(mysqli_query($link,$sql))
                      {
                        echo "<center>Postup Uložen.</center>";
                        echo " <div class='tlacitkoz'> <center> <div class='formz'> <form method='POST' action='../index.php'> <input type=\"submit\" value=\"Vrátit zpět\"> </center> </form> </div> </div class ='tlacitko'>";
                      }
                      else
                      {
                        echo "<center>Tento úkol jsi již dokončil.</center>";
                        echo " <div class='tlacitkoz'> <center> <div class='formz'> <form method='POST' action='../index.php'> <input type=\"submit\" value=\"Vrátit zpět\"> </center> </form> </div> </div class ='tlacitko'>";
                      }
                    }
                    else{
                      echo "<center>Tento úkol jsi již dokončil.</center>";
                      echo " <div class='tlacitkoz'> <center> <div class='formz'> <form method='POST' action='../index.php'> <input type=\"submit\" value=\"Vrátit zpět\"> </center> </form> </div> </div class ='tlacitko'>";
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
                  $sql = "INSERT INTO ukoly (username, Basic3) VALUES ('$uzivatel', $casik)";
                if(mysqli_query($link,$sql))
                {
                  echo "<center>Postup Uložen.</center>";
                  echo " <div class='tlacitkoz'> <center> <div class='formz'> <form method='POST' action='../index.php'> <input type=\"submit\" value=\"Vrátit zpět\"> </center> </form> </div> </div class ='tlacitko'>";
                }
                else
                {
                  echo mysqli_error($link);
                  echo " <div class='tlacitkoz'> <center> <div class='formz'> <form method='POST' action='../index.php'> <input type=\"submit\" value=\"Vrátit zpět\"> </center> </form> </div> </div class ='tlacitko'>";
                }
              }
            }

            }
                ?>
        </center>
    </body>
</html>