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
echo "1";
            $mail = new PHPMailer;
echo "2";
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
                  $mail->addAddress("novotnyo.itb18@vsps-su.cz");
                  
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

            ?>