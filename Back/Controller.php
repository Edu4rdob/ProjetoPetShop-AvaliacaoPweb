<?php
	$nome = $_REQUEST["nome"];
	$usuario = $_REQUEST["usuario"];
	$telefone = $_REQUEST["telefone"];
	$cpf = $_REQUEST["cpf"];
	$email = $_REQUEST["email"];
	$id = $_REQUEST["id"];
	$cod = $_REQUEST["codigo"];
	$endereco= $_REQUEST["endereco"];
	$_SESSION["nome"] = $nome;
	$_SESSION["usuario"] = $usuario;
	$_SESSION["telefone"] = $telefone;
	$_SESSION["cpf"] = $cpf;
	$_SESSION["email"] = $email;
	$_SESSION["id"] = $id;
	$_SESSION["endereco"] = $endereco;
	$_SESSION["codigo"] = $cod;
	//echo "Informações armazenadas na seção";
	require_once 'Cliente.php';
	require_once 'Veterinario.php';
	require_once 'Conexao.php';
	
	Class Controller {
	
		public function adicionarCliente(){
			if($_REQUEST["nome"]=='' or $_REQUEST["usuario"]== '' or $_REQUEST["email"]== '' 
			or $_REQUEST["senha"]=='' or $_REQUEST["cpf"]=='' or $_REQUEST["telefone"]=='' or $_REQUEST["endereco"]==''){
				echo "Por favor complete todos os campos";
			}else{										
				$senhaCrip = md5($_REQUEST["senha"]);
				$cliente = New Cliente( $_REQUEST["nome"],$_REQUEST["usuario"], $_REQUEST["email"],
				$_REQUEST["cpf"],$_REQUEST["telefone"],$_REQUEST["endereco"], $senhaCrip);
				$conexao = new Conexao();
				$conexao->adicionarCliente($cliente);
			}
		}
		public function adicionarVeterinario(){
			if($_REQUEST["nome"]=='' or $_REQUEST["usuario"]== '' or $_REQUEST["email"]== '' 
			or $_REQUEST["senha"]=='' or $_REQUEST["cpf"]=='' or $_REQUEST["telefone"]=='' or $_REQUEST["endereco"]=='' or $_REQUEST["id"]=='' or $_REQUEST["codigo"]==''){
				echo "Por favor complete todos os campos";
			}else{		
				if( $_REQUEST["codigo"]== 50){
					$senhaCrip = md5($_REQUEST["senha"]);
					$veterinario = New Veterinario( $_REQUEST["nome"],$_REQUEST["usuario"], $_REQUEST["email"],
					$_REQUEST["cpf"],$_REQUEST["telefone"], $_REQUEST["id"],$_REQUEST["endereco"], $_REQUEST["codigo"], $senhaCrip);
					$conexao = new Conexao();
					$conexao->adicionarVeterinario($veterinario);
				}else{
					echo 'Por favor peça o número de código para poder se cadastrar!';
				}
			}
		}
		public function adicionarPet(){
			
		}
		
	}
	
?>