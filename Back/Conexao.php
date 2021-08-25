<?php
	//require_once 'Controller.php';
	require_once 'Cliente.php';
	
	Class Conexao(){
		$username = "root";
		$password = "";
		
		Conexao(Cliente cliente){
			try {
				$conn = new PDO('mysql:host=localhost;dbname=clinica', $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$nome = $cliente->getNome();
				$usu = $cliente->getUsuario();
				$email = $cliente->getEmail();
				$cpf = $cliente->getCpf();
				$telefone = $cliente->getTelefone();
				$senha = $cliente->getSenha();
				$stmt = $conn->prepare('INSERT INTO CLIENTE VALUES(?,?,?,?,?,?)');
				$stmt->bindParam(1,$nome, PDO::PARAM_INT);
				$stmt->bindParam(2,$usu, PDO::PARAM_INT);
				$stmt->bindParam(3,$email, PDO::PARAM_INT);
				$stmt->bindParam(4,$cpf, PDO::PARAM_INT);
				$stmt->bindParam(5,$telefone, PDO::PARAM_INT);
				$stmt->bindParam(6,$senha, PDO::PARAM_INT);
				$stmt->execute();
				echo "foi";
				//$usus = $conn->prepare('SELECT nome, usuario, email FROM USUARIOS');
				//$usus->execute();
				/*$c=0;
				while($row = $usus->fetch(PDO::FETCH_OBJ)){
				  echo'USUARIO '. $c;
				  echo "<br>";
				  echo ' -----------------------'; echo "<br>";
				  echo 'Nome: '.$row->nome; echo "<br>";
				  echo 'Usuario: '.$row->usuario; echo "<br>";
				  echo 'Email: '.$row->email; echo "<br>";
				  echo ' -----------------------'; echo "<br>";echo "<br>";
				  $c++;
				}*/
			} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
		}
	}
	
?>