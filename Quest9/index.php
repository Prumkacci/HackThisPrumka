<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 9</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 9'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečný Jarda zvolil zcela jiný přístup k skrytí věcí, zjištíš co a jak?</div>
            
          <?php
      session_name("users"); 
      session_start(); 
      date_default_timezone_set('UTC');
    ?>

    <?php
    if(!isset($_POST["password"])){
      $_SESSION["cas2"] = date("His");
    }
              echo "<b>Heslo:</b> <br><form action=\"/HackThisPrumka/Quest9/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>"; 
            
                if(!isset($_COOKIE["level9Auth"])){
                  $cas = time() + (84600 * 30);
                   setcookie("level9Auth", "false", $cas , "/");
                  
                }

            if (isset($_POST["password"]) && isset($_COOKIE["level9Auth"]) && $_COOKIE["level9Auth"] == "true")
            {
              echo "<b>Gratuluji Dokončil jsi úkol 9.<b>";
              $link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

          if (!$link) {
          echo "Chyba při připijení do db";
          }

          $sql='SELECT username FROM ukoly WHERE username ="'. $_SESSION['username'] . '"';
        if($vysledek = mysqli_query($link,$sql))
        {
          if(mysqli_num_rows($vysledek)>0) 
          {
            $sql = 'SELECT ID,Basic9 FROM ukoly WHERE username = "'. $_SESSION['username'] . '"';
            if($vysledek = mysqli_query($link,$sql))
            {
              if(mysqli_num_rows($vysledek)>0) 
              {
                $Value = $vysledek->fetch_object();
                if($Value->Basic9 == NULL)
                {
                  $cas1 = date("His");
                  $cas = $cas1 - $_SESSION["cas2"];
                  $casik = date("His", $cas);
                  $uzivatel = $_SESSION["username"];
                  $_SESSION["cas2"] = "";
                  $sql = 'UPDATE ukoly SET Basic9 = ' .$casik. ' WHERE ID = ' . $Value->ID;
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
              $sql = "INSERT INTO ukoly (username, Basic9) VALUES ('$uzivatel', $casik)";
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
            if(isset($_POST["password"]) && isset($_COOKIE["level9Auth"]) && $_COOKIE["level9Auth"] == "false")
            {
                echo "nemáš přístup k těmto souborům";
            }

                ?>
        </center>
    </body>
</html>