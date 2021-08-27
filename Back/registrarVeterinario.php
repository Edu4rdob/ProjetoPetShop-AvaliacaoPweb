
<?php
	session_start();
	require_once 'Controller.php';
	$controller = new Controller();
	$controller->adicionarVeterinario();
	

?>