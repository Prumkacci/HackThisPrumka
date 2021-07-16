<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Hlavní menu</title>
    <meta charset='utf-8'>
    <meta name='description' content='Hlavní menu'>
    <meta name='keywords' content='Quest'>
    <meta name='author' content='Ondřej Novotný'>
    <meta name='robots' content='all'>
    <link rel="style" href="style.css">
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
    <body>
        
            <?php
            session_start();
            if(!isset($_SESSION["loginMenu"])){
                $_SESSION["loginMenu"] = 1;
            }
        function login()
        {
            echo"<h3>Přihlášení</h3><br/>";
            echo "
            <form action=\"/HackThisPrumka/index.php\" method=\"post\">
                <div>Jméno:</div>
                <input type=\"text\" name=\"username\" value = \"\"><br/>
                <div>Heslo:</div>
                <input type=\"password\" name=\"password\" value = \"\"><br/>
                <input type=\"submit\" value=\"Přihlasit se\">
            </form>";
            echo"
                <br/>
                <br/>
            <form method='POST'>
                <input type='submit' name='reg' value='Chci se zaregistrovat'>
            </form>";
        }
        function register()
        {
            echo"<h3>Registrace</h3><br/>";
            echo "
            <form action=\"/HackThisPrumka/index.php\" method=\"post\">
                <div>Jméno:</div>
                <input type=\"text\" name=\"username\" value = \"\"><br/>
                <div>Heslo:</div>
                <input type=\"password\" name=\"password\" value = \"\"><br/>
                <div>Znovu heslo:</div>
                <input type=\"password\" name=\"password2\" value = \"\"><br/>
                <input type=\"submit\" value=\"Zaregistrovat se\">
            </form>";
            echo"
                <br/>
                <br/>
            <form method='POST'>
                <input type='submit' name='log' value='Chci se přihlásit'>
            </form>";
        }

          if(isset($_POST["reg"])){
            $_SESSION["loginMenu"] = 2;
          }
          if(isset($_POST["log"])){
            $_SESSION["loginMenu"] = 1;
          }
          if($_SESSION["loginMenu"] == 1){
            login();
        }
        else if($_SESSION["loginMenu"] == 2){
            register();
        }

          ?>
          
        
    </body>
</html>