<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 2</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 2'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečný Jarda si tuto stránku zabezpečil pomocí hesla v souboru. Bohužel zapoměl soubor nahrát.</div>
            <b>Heslo:</b>
            <?php
            $heslo2 = "";
              echo "<br><form action=\"/WEB/Quest2/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>";           
            if ( isset($_POST["password"]) && $_POST["password"] == $heslo2)
            {
              echo "<b>Gratuluji Dokončil jsi úkol 2.<b>";
            }
                ?>
        </center>
    </body>
</html>