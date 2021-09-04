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
            }
            if(isset($_POST["password"]) && isset($_COOKIE["level9Auth"]) && $_COOKIE["level9Auth"] == "false")
            {
                echo "nemáš přístup k těmto souborům";
            }

                ?>
        </center>
    </body>
</html>