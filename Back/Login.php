
<?php
	include 'teste.php';
	$email = $_REQUEST["email"];
	$_SESSION["email"] = $email;
	echo $email;
	require_once 'ControllerLogin.php';
	$controller = new ControllerLogin();

?>