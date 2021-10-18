<?php
	//session_start();
	$senhaCrip = md5($_REQUEST["senha"]);
	$email = $_REQUEST["email"];
	$_SESSION["email"] = $email;
	require_once'Login.php';
	require_once 'mostrarVet.php';
	require_once'MostraCliente.php';

?>