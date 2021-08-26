
<?php
	session_start();
	//echo "Informações armazenadas";
	//require_once 'Controller.php';
	//require_once 'Conexao.php';
	require_once 'Cliente.php';
	$cliente = new Cliente();
	$cliente->adicionar();
	

?>