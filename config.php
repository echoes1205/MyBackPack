<?php
error_reporting(0);
//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('56337795188-c7sl660qke4si34f1fo9o8agjomqa7p5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/MyBackPackV5/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>