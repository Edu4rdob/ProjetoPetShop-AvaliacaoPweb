
<?php
	session_start();
	require_once 'Controller.php';
	require_once '../model/Cliente.php';
	$controller = new Controller();
	$controller->adicionarCliente();

?>