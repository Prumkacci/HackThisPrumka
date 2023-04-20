<?php
require_once 'GoogleOAuth/vendor/autoload.php';
session_name("users"); 
session_start(); 
// init configuration
$clientID = '559254668012-5bk8ke9l6q7doqd4u9qe11o926j83f8o.apps.googleusercontent.com';
$clientSecret = 'YOUR GOOGLE OAUTH';
$redirectUri = 'http://localhost/HackThisPrumka/prihlaseni.php';
   
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  $_SESSION["username"] = $name;
  header('location: index.php');
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>
