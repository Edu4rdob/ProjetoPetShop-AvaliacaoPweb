
<?php
	session_start();
	require_once 'Controller.php';
	require_once 'Cliente.php';
	$controller = new Controller();
	$controller->adicionarCliente();
	

?>