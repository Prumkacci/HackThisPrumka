<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 1</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 1'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="stylesheet" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>

  </head>
    <body>
        <center>
          <div>V tomto úkolu jde o úplný základ HTML. Hodně štěstí </div>
            <a href = "https://www.w3schools.com/html/html_intro.asp" target="_blank"><b>Pro neznalé</b></a><br><br>
            <b>Heslo:</b>
            <?php
            $heslo1 = "frea4578";
              echo "<br><form action=\"/HackThisPrumka/WEB/Quest1/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>
                <!-- Heslo je: " . $heslo1 . " -->";
              
            
            if ( isset($_POST["password"]) && $_POST["password"] == $heslo1)
            {
              echo "<b>Gratuluji Dokončil jsi úkol 1.<b>";
            }
                ?>
        </center>
    </body>
</html>