<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 6</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 6'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečný Jarda si název souboru ve kterém se heslo nachází zašifroval.</div>
          <div>Jarda si ještě zkusil vytvořit script co mu zobrazí kalendář podle roku co se zadá.</div>
            <?php
              echo "<br><form action=\"/HackThisPrumka/Quest6/kalendar.php\" method=\"post\">
              <input type=\"text\" name=\"kalendar\" value = \"\"><br><br>
              <input type=\"submit\" value=\"Odeslat\"></form>";

              echo "<br><b>Heslo:</b><br><form action=\"/HackThisPrumka/Quest6/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>";           
            if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("hjgfvasafvdv1a5fgfdklgafasga4fg65d.txt"))
            {
              echo "<b>Gratuluji Dokončil jsi úkol 6.<b>";
            }
                ?>
        </center>
    </body>
</html>