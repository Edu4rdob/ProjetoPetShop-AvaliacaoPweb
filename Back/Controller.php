<?php
	session_start();
	require_once 'Cliente.php';
	require_once 'Conexao.php';
	Class Controller {
	
		__construct(){
			$nome = $_REQUEST["nome"];
			$usuario = $_REQUEST["usuario"];
			$telefone = $_REQUEST["telefone"];
			$cpf = $_REQUEST["cpf"];
			$email = $_REQUEST["email"]
			$_SESSION["nome"] = $nome;
			$_SESSION["usuario"] = $usuario;
			$_SESSION["telefone"] = $telefone;
			$_SESSION["cpf"] = $cpf;
			$_SESSION["email"] = $email;
			echo "Informações armazenadas";
			
			if($_REQUEST["nome"]=='' or $_REQUEST["usuario"]== '' or $_REQUEST["email"]== '' 
			or $_REQUEST["senha"]=='' or $_REQUEST["cpf"]=='' or $_REQUEST["telefone"]==''){
				echo "Por favor complete todos os campos";
			}else{										
				$senhaCrip = md5($_REQUEST["senha"]);
				$cliente = New Cliente( $_REQUEST["nome"],$_REQUEST["usuario"], $_REQUEST["email"],
				$_REQUEST["cpf"],$telefone, $senhaCrip);
				echo "foi";
				$conexao = new Conexao($cliente);
			}
			
		}
		
	}
	
?>

<?php
	$c = new Controller();
	$c= $c->conectar();
	
?>