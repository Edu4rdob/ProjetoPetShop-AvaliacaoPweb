
<?php
	session_start();
	require_once 'mostrarVet.php';
	$mostrar = new mostrarVet($_SESSION["email"]);

?>
<!DOCTYPE html>
<html>
	<head> 
		<title> Atividade</title>
		<meta charset="utf-8">
	<head>

<body>
		<h1> LOGOU </h1>
</body>

</html>