<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 1</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 1'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="./style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
=======
    <link rel="stylesheet" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
>>>>>>> 5115217ccad0db89b6df03b2cfac5c078498197b

  </head>
    <body>
        
    <center>
         <div class="nadpis">V tomto úkolu jde o úplný základ HTML. Hodně štěstí </div>
          
            
         <span id="wrapper">


	
<a href="https://www.w3schools.com/html/html_intro.asp" target="_blank"  class="button ten">Pro neznalé.</a>
	

</span>   


</div>
            
          <b>Heslo:</b>
            <?php
            $heslo1 = "frea4578";
             
            echo "<br><form action=\"/HackThisPrumka/WEB/Quest1/index.php\" method=\"post\">
                <input type=\"password\" name=\"password\" value = \"\"><br><br>
                <input type=\"submit\" value=\"Odeslat\"></form>
                <!-- Heslo je: " . $heslo1 . " -->";
              
            
            if ( isset($_POST["password"]) && $_POST["password"] == $heslo1)
            {
              echo "<h1>Gratuluji Dokončil jsi úkol 1.<h1>";
            }
                ?>
          
        </center>
    </body>
</html>