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
      session_name("users"); 
      session_start(); 
      date_default_timezone_set('UTC');
    ?>

    <?php
    if(!isset($_POST["password"])){
      $_SESSION["cas2"] = date("His");
    }
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
              $link = mysqli_connect('localhost', 'nov', 'Ondra2580,', 'HackThisPrumka');

          if (!$link) {
          echo "Chyba při připijení do db";
          }

          $sql='SELECT username FROM ukoly WHERE username ="'. $_SESSION['username'] . '"';
        if($vysledek = mysqli_query($link,$sql))
        {
          if(mysqli_num_rows($vysledek)>0) 
          {
            $sql = 'SELECT ID,Basic10 FROM ukoly WHERE username = "'. $_SESSION['username'] . '"';
            if($vysledek = mysqli_query($link,$sql))
            {
              if(mysqli_num_rows($vysledek)>0) 
              {
                $Value = $vysledek->fetch_object();
                if($Value->Basic10 == NULL)
                {
                  $cas1 = date("His");
                  $cas = $cas1 - $_SESSION["cas2"];
                  $casik = date("His", $cas);
                  $uzivatel = $_SESSION["username"];
                  $_SESSION["cas2"] = "";
                  $sql = 'UPDATE ukoly SET Basic10 = ' .$casik. ' WHERE ID = ' . $Value->ID;
                  if(mysqli_query($link,$sql))
                  {
                    echo "Postup Uložen.";
                  }
                  else
                  {
                    echo "Už si úkol dokončil.";
                  }
                }
                else{
                  echo "Už si úkol dokončil.";
                }
              }
            }

          }
          else
          {
              $cas1 = date("His");
              $cas = $cas1 - $_SESSION["cas2"];
              $casik = date("His", $cas);
              $uzivatel = $_SESSION["username"];
              $_SESSION["cas2"] = "";
              $sql = "INSERT INTO ukoly (username, Basic10) VALUES ('$uzivatel', $casik)";
            if(mysqli_query($link,$sql))
            {
              echo "Postup Uložen.";
            }
            else
            {
              echo mysqli_error($link);
            }
          }
        }
            }
            

        ?>
    </body>
</html>