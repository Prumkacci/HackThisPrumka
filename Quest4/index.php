<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Quest No. 4</title>
    <meta charset='utf-8'>
    <meta name='description' content='úkol 4'>
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
    $heslo4 = "Jarmilka154876";
    ob_start(); echo "<center>
    <div class='nadpis'> <h1>Bezpečný Jarda už si heslo hlídá jinak, ale jelikož je hlava děravá nachystal si  skript který mu odešle heslo na email.</h1> </div>
            

              
                   <br><form action='/HackThisPrumka/Quest4/index.php' method='POST'>
                  <input type='hidden' name='komu' value='bezpecnyj.itb18@vsps-su.cz'> </div>
                   <div class='email'> <input type='submit' value='Odeslat Heslo Jardovi'><br><br> </div>
                   </center> <div class='psani'> <h1>PŘIHLÁŠENÍ</h1> </div>
                   <div class ='jmeno'> <label for='jmeno'> Jméno:</label> <br> <input type=\"text\" name=\"jmeno\" value = \"Admin\" placeholder=\"Jméno\"><br><br> </div class='jmeno'> 
            
                <div class ='heslo'> <label for='password'> Heslo:</label> <br> <input type=\"password\" name=\"password\" value = \"\" placeholder=\"Heslo\"><br><br> </div class='heslo'>
                <div class='tlacitko'> <center> <input type=\"submit\" value=\"Odeslat\"> </center> </form> </div class ='tlacitko'>";           
              if ( isset($_POST["password"]) && $_POST["password"] == "$heslo4")
                {
                  ob_end_clean(); echo
                  "<div class='confetti'>
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
              </div> <h2> Gratuluji, dokončil jsi úkol číslo 4!</h2>";
                }

                require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/Exception.php';
                require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/PHPMailer.php';
                require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/SMTP.php';
                require '/var/www/html/HackThisPrumka/Quest4/vendor/phpmailer/phpmailer/src/OAuth.php';
    
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\OAuth;
    
                require '/var/www/html/HackThisPrumka/Quest4/vendor/autoload.php';
    if (isset($_POST["komu"]))
          {
                  $mail = new PHPMailer;
                  try 
                  {
                      $mail -> SMTPDebug = false;
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
                      $mail->send();
                  }
                  catch (Exception $e) 
                  {
                      echo "Zpráva nebyla odeslána. Mailer Error: {$mail->ErrorInfo}";
                  } 
          }
                ?>
        </center>
    </body>
</html>