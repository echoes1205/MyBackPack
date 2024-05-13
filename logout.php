<?php
include('config.php');

	@session_start();
	$google_client->revokeToken();
	session_destroy();
	header("Location: index.php");
 
 ?>
