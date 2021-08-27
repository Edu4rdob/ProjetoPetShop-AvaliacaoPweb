<?php
		//$senha = $_REQUEST["senha"];
		
    Class ControllerLogin {
		
        public function __construct(){
			$senhaCrip = md5($_REQUEST["senha"]);
			$email = $_REQUEST["email"];
			$_SESSION["email"] = $email;
				$usunome = "root";
                $password = "";
				try {
					$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$sql = "SELECT * FROM CLIENTE";
					$sql2 = "SELECT * FROM VETERINARIO";
					
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					
					$result = $stmt->fetchAll();
					
					$stmt = $conn->prepare($sql2);
					$stmt->execute();
					$result2 = $stmt->fetchAll();
					
					foreach($result as $value){
						if($value['email'] == $email && $value['senha'] ==$senhaCrip){
							header("Location: ../Front/dashboard/telaCliente.php");
							//require_once '../Front/dashboard/telaCliente.php';
						}else{
							echo 'Digite as informações corretas';
						}
					}
					foreach($result2 as $value2){
						if($value2['email'] == $email && $value['senha'] ==$senhaCrip){
							$email = $_REQUEST["email"];
							$_SESSION["email"] = $email;
							header("Location: ../Front/dashboard/telaVet.php");
						}else{
							echo 'Digite as informações corretas';
						}
					}
				}catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
              }
        }


?>