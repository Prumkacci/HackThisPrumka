<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 5</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 5'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
        <?php
        $heslo5 = "rafe485sdc";

            function sifra($vstup){
                $vysledek = "";
                $vstup = str_split($vstup);
                for($i = 0;$i != count($vstup); $i++){
                    $vysledek .= chr(ord($vstup[$i]) + ($i + 1));

                }
                return $vysledek;
            }

          echo "<div>Bezpečný Jarda si heslo zašifroval. bohužel veřejně dostupným šifrovačem. Podařilo se ti dostat heslo v zašifrované podobě " . sifra($heslo5) . "</div>";
            

            echo "<br/><b>Šifrovací engine<b><br><form action=\"/HackThisPrumka/Quest5/index.php\" method=\"post\">
                <input type=\"text\" name=\"text\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>";

                if ( isset($_POST["text"]))
              {
              echo "<br>Tvoje šifra je " . sifra($_POST["text"]);
              }

              echo "<br><br><b>Heslo:</b> <br><form action=\"/HackThisPrumka/Quest5/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>";           
            if ( isset($_POST["password"]) && $_POST["password"] == $heslo5)
            {
              echo "<b>Gratuluji Dokončil jsi úkol 5.<b>";
            }
        ?>
        </center>
    </body>
</html>