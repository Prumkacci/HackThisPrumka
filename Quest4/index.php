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

require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/Exception.php';
require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/SMTP.php';
require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/OAuth.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;

require '/var/www/html/HackThisPrumka/Quest4/vendor/autoload.php';



            $heslo4 = "Jarmilka15,4876";
              echo"<br><form action='/HackThisPrumka/Quest4/index.php' method='post'>
                   <input type='hidden' name='komu' value='novotnyo.itb18@vsps-su.cz'>
                   <input type='submit' value='Odeslat Heslo Jardovi'><br><br>";
              echo "<b>Heslo:</b>
                    <br><form action=\"/HackThisPrumka/Quest4/index.php\" method=\"post\">
                    <input type=\"password\" name=\"password\" value = \"\"><br><br>
                    <input type=\"submit\" value=\"Odeslat\"></form>";           
            if ( isset($_POST["password"]) && $_POST["password"] == "$heslo4")
            {
              echo "<b>Gratuluji Dokončil jsi úkol 4.<b>";
            }

            
            if ( isset($_POST["komu"]) && str_contains($_POST["komu"],"vsps-su.cz"))
            {
              
              $mail = new PHPMailer;
              
              try 
              {
                  $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
                  $mail->isSMTP();   
                  $mail->CharSet = 'UTF-8';
                  $mail->Encoding = 'base64';                                      
                  $mail->Host       = 'smtp.gmail.com';                     
                  $mail->SMTPAuth   = true;                                   
                  $mail->Username   = 'jarouseeek@gmail.com';                     
                  $mail->Password   = 'Pavouk02';                               
                  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                  $mail->Port       = 465;

                  $mail->setFrom("jarouseeek@gmail.com");
                  $mail->addAddress($_POST["komu"]);
                  
                  $mail->isHTML(true);                                  
                  $mail->Subject = 'Připomínka Hesla.';
                  $mail->Body    = 'Heslo je <b>'. $heslo4 .'</b> !';
                  $mail->AltBody = 'Heslo je ' . $heslo4 .' !';
              echo "Mail naplněn.";
                  $mail->send();
              echo "email odeslán.";
              } 
              catch (Exception $e) 
              {
                  echo "Zpráva nebyla odeslána. Mailer Error: {$mail->ErrorInfo}";
              }
            }
            else if(isset($_POST["komu"])){
              echo "Email Neobsahuje vhodnou doménu.";
            }  
                ?>
        </center>
    </body>
</html>