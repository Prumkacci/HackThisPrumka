<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 4</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 4'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečný Jarda už si heslo hlídá jinak, ale jelikož je hlava děravá nachystal si  skript který mu odešle heslo na email.</div>
            <?php
            $heslo4 = "Jarmulka15,4876.";
              echo"<br><form action='/WEB/Quest4/index.php' method='post'>
                   <input type='hidden' name='komu' value='novotnyo.itb18@vsps-su.cz'>
                   <input type='submit' value='Odeslat Heslo Jardovi'><br><br>";
            if ( isset($_POST["komu"]) )
            {
              ini_set('SMTP','smtp.gmail.com');
              ini_set('smtp_port',"465");
              $to = $_POST["komu"];
              $subject = "Připomínka Hesla";
              $message = "Zase jsem ho zapoměl, Jardo!, heslo je " . $heslo4 . " ještě že mě máš.";
              $header = "From: novotnyo.itb18@vsps-su.cz";
              mail($to, $subject, $message, $header);
            }
              echo "<b>Heslo:</b>
                    <br><form action=\"/WEB/Quest4/index.php\" method=\"post\">
                    <input type=\"password\" name=\"password\" value = \"\"><br><br>
                    <input type=\"submit\" value=\"Odeslat\"></form>";           
            if ( isset($_POST["password"]) && $_POST["password"] == "$heslo4")
            {
              echo "<b>Gratuluji Dokončil jsi úkol 4.<b>";
            }
                ?>
        </center>
    </body>
</html>