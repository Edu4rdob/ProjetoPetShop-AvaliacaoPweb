
<?php
	Class MostraCliente{
		public function __construct(){
			$email = $_REQUEST["email"];
			$_SESSION["email"] = $email;
				$usunome = "root";
                $password = "";
				try {
					$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$sql = "SELECT * FROM CLIENTE";
					
					$stmt = $conn->prepare($sql);
					$stmt->execute();		
					$result = $stmt->fetchAll();
					
					foreach($result as $value){
						if($value['email'] == $email){
							echo $value['nome'],'<br>',$value['usuario'],'<br>',$value['email'];
						}
					}

				}catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
	}
	}
?>