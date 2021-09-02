<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 10</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 10'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        <?php
            $cislo = rand(1, 5);
            if($cislo == 1){
                echo "Ta naše průmka je úžasná.";
            }
            if($cislo == 2){
                echo "Ten web té naší průmky je krásnej.";
            }
            if($cislo == 3){
                echo "Ještě že má ta naše průmka tak skvělé vybavení.";
            }
            if($cislo == 4){
                echo "Kéž by každá škola byla jako naše průmka.";
            }
            if($cislo == 5){
                echo "Průmka je život.";
            }

            echo "<br/><br/><b>Heslo:</b> <br><form action=\"/HackThisPrumka/Quest10/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>"; 

            if (isset($_POST["password"]) && $_POST["password"] == "ale není tady!")
            {
              echo "<b>Gratuluji Dokončil jsi úkol 10.<b>";
            }
            

        ?>
    </body>
</html>