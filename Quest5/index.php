<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 5</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 5'>
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
    $heslo5 = "rafe485sdc";
    if(!isset($_POST["password"])){
      $_SESSION["cas2"] = date("His");
    }
    function sifra($vstup){
      $vysledek = "";
      $vstup = str_split($vstup);
      for($i = 0;$i != count($vstup); $i++){
          $vysledek .= chr(ord($vstup[$i]) + ($i + 1));

      }
      return $vysledek;
  }
 

    ob_start(); echo "<center> 

           <div class='nadpis'> <h1>Bezpečný Jaroušek si heslo zašifroval. bohužel veřejně dostupným šifrovačem. Podařilo se ti dostat heslo v zašifrované podobě <br/><u>" . sifra($heslo5) . "</u></h1> </div>
           

                <div class='psani'> <h1>Šifrovací engine</h1> </div> 
                <form action=\"/HackThisPrumka/Quest5/index.php\" method=\"post\">
                <div class='jmeno'> <input type=\"text\" name=\"text\"><br><br> </div>
                <div class='tlacitko'> <input type=\"submit\" value=\"Zašifrovat\"></form> </div>"; 

                if ( isset($_POST["text"]))
                {
                  echo "<div class='sifravys'> <br>Tvoje šifra je  " . sifra($_POST["text"]). "</div>";
                }

                echo "<div class='psani'> <h1>PŘIHLÁŠENÍ</h1> </div><br><form action=\"/HackThisPrumka/Quest5/index.php\" method=\"post\">
                
                <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
                <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
                <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>";         
            if ( isset($_POST["password"]) && $_POST["password"] == $heslo5)
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
          </div> <h2> Gratuluji, dokončil jsi úkol číslo 5!</h2>";

          $link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

          if (!$link) {
          echo "Chyba při připijení do db";
          }

          $sql='SELECT username FROM ukoly WHERE username ="'. $_SESSION['username'] . '"';
        if($vysledek = mysqli_query($link,$sql))
        {
          if(mysqli_num_rows($vysledek)>0) 
          {
            $sql = 'SELECT ID,Basic5 FROM ukoly WHERE username = "'. $_SESSION['username'] . '"';
            if($vysledek = mysqli_query($link,$sql))
            {
              if(mysqli_num_rows($vysledek)>0) 
              {
                $Value = $vysledek->fetch_object();
                if($Value->Basic5 == NULL)
                {
                  $cas1 = date("His");
                  $cas = $cas1 - $_SESSION["cas2"];
                  $casik = date("His", $cas);
                  $uzivatel = $_SESSION["username"];
                  $_SESSION["cas2"] = "";
                  $sql = 'UPDATE ukoly SET Basic5 = ' .$casik. ' WHERE ID = ' . $Value->ID;
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
              $sql = "INSERT INTO ukoly (username, Basic5) VALUES ('$uzivatel', $casik)";
            if(mysqli_query($link,$sql))
            {
              echo "<center>Postup Uložen.</center>";
              echo " <div class='tlacitkoz'> <center> <div class='formz'> <form method='POST' action='../index.php'> <input type=\"submit\" value=\"Vrátit zpět\"> </center> </form> </div> </div class ='tlacitko'>";
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