<?php
  
  require_once('models/maestrosModel.php');
  require_once('models/usuarioModel.php');
  require_once('models/reviewModel.php');
  require_once('google-api/vendor/autoload.php');

  $maestros = new MaestrosModel();
  $maestros = $maestros->getAll();
  $usuarioM = new UsuariosModel();
  $reviewModel = new ReviewModel();

/*
  // init configuration
  $clientID = '867187474545-9vlflibutnlpma8uejcdhsgaj73cfu2e.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'https://profepedia.000webhostapp.com/';
    
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
  
    // now you can use this profile info to create account in your website and make user logged in.
  } else {
    echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
  }
    */
  require_once('views/index.php')
?>