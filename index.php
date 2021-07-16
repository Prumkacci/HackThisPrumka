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

            $servername = "localhost";
            $username = "ondrasek";
            $password = "Ondra2580,";
            $dbname = "HackThisPrumka";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if($conn->connection_error){
                die("Připojení selhalo: " .  $conn->connect_error);
            }

            
            if(isset($_POST["Registrovat"])){
                $jmeno  =   $_POST["username"];
                $heslo  =   $_POST["password"];
                $heslo2 =   $_POST["password2"];
                $sql = "SELECT name FROM Ucty WHERE name='". $jmeno ."'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    echo "Uživatel s tímto jménem je již zaregistrován.";
                }
                else{
                    if($heslo == $heslo2){
                        $sql = "INSERT INTO Ucty (name, password) VALUES ($jmeno, $heslo)";
                        if($conn->query($sql) == TRUE){
                            echo "Uživatel vytvořen.";
                        }
                    }
                    else{
                        echo "Hesla se neshodují.";
                    }
                }
                
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
                <input type=\"submit\" value=\"Přihlasit se\" name='Prihlasit'>
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
                <input type=\"submit\" value=\"Zaregistrovat se\" name='Registrovat'>
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
        
        function showMenu(){

        }
          ?>
          
        
    </body>
</html>