<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 3</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 3'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečný Jarda si tuto stránku zabezpečil pomocí hesla v souboru. Tentokrát ho dokonce nahrál.</div>
            <b>Heslo:</b>
            <?php
              echo "<br><form action=\"/HackThisPrumka/Quest3/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>";           
            if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("heslo"))
            {
              echo "<b>Gratuluji Dokončil jsi úkol 3.<b>";
            }
                ?>
        </center>
    </body>
</html>