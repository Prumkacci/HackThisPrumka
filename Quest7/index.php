<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 7</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 7'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečný Jarda si heslo hlídá v souboru. Ale protože je zdatný Ajťák udělal si v php skript co vypisuje délku jména.</div>
            
            <?php
            echo "<br/><b>Vložte jméno:</b>";
                 echo "<form action=\"/HackThisPrumka/Quest7/jmeno.php\" method=\"post\">
                 <input type=\"text\" name=\"jmeno\" value = \"\"><br><br>
                 <input type=\"submit\" value=\"Odeslat\"></form></br>"; 


                 
              echo "<b>Heslo:</b> <br><form action=\"/HackThisPrumka/Quest7/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>"; 
                
                if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("akjsdkjandkjh4a64s7a6.txt"))
            {
              echo "<b>Gratuluji Dokončil jsi úkol 7.<b>";
            }
                ?>
        </center>
    </body>
</html>