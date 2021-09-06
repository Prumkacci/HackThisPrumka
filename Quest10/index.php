<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 10</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 10'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style.css">
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
            $cislo = rand(1, 7);
            if($cislo == 1){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Ta naše průmka je ale úžasná, že? </h1> </div>";
            }
            if($cislo == 2){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Ten web té naší průmky je krásnej. </h1> </div>";
            }
            if($cislo == 3){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Ještě že má ta naše výběrová škola tak skvělé vybavení. </h1> </div>";
            }
            if($cislo == 4){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Kéž by každá škola byla elita Šumperka jako naše průmka. </h1> </div>";
            }
            if($cislo == 5){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Průmka je život. </h1> </div>";
            }

            if($cislo == 6){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Tolik báječných učitelů tu je. </h1> </div>";
            }

            if($cislo == 7){
              ob_start(); echo " <center> <div class='nadpis'> <h1>  Kdo by nechtěl studovat na prestižní škole, jako je Průmka </h1> </div>";
            }

            ob_start(); echo " <div class='psani'> <h1>PŘIHLÁŠENÍ </h1> </div> <br><form action=\"/HackThisPrumka/Quest10/index.php\" method=\"post\">
            <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
            <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
            <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>"; 

            if (isset($_POST["password"]) && $_POST["password"] == "ale není tady!")
            {
              ob_end_clean(); echo "
              <div class='confetti'>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <div class='confetti-piece'></div>
              <h2>Gratuluji Dokončil jsi úkol 10.</h2>";
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
                    echo "Už jsi úkol dokončil.";
                  }
                }
                else{
                  echo "Už jsi úkol dokončil.";
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
        <footer>
          
          <img src="../obrazky/boha1.png" width="500">
          </footer>
    </body>
</html>