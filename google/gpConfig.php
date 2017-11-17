<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '856293864310-b86m1cjps5nh33j95fjcpko9be1msfbs.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'KkJLo_kZ7nYnI7gIZJ_9iR8O'; //Google client secret
$redirectURL = 'http://localhost/google/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Kolan India');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>