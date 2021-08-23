<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 8</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 8'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <center>
          <div>Bezpečnému Jardovi se nakonec povedlo si tuhle stránku pohlídat. Najdeš způsob jak mu to pokazit?</div>
            
            <?php 
              echo "<b>Heslo:</b> <br><form action=\"/HackThisPrumka/Quest8/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>"; 
                
                if ( isset($_POST["password"]) && $_POST["password"] == file_get_contents("andamndlam56adaewef6wewfng6.txt"))
            {
              echo "<b>Gratuluji Dokončil jsi úkol 8.<b>";
            }
                ?>
        </center>
    </body>
</html>