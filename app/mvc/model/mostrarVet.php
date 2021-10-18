
<?php
	//include 'teste.php';
	Class MostrarVet{
		public function __construct($emailS){
				$email = $emailS;
				$usunome = "root";
                $password = "";
				try {
					$conn = new PDO('mysql:host=localhost;dbname=clinica', $usunome, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$sql = "SELECT * FROM VETERINARIO";
					
					$stmt = $conn->prepare($sql);
					$stmt->execute();		
					$result = $stmt->fetchAll();
					
					foreach($result as $value){
						if($value['email'] == $email){
							echo '<h6>Nome: ', $value['nome'],'</h6><br>','<h6>User: ',$value['usuario'],'</h6><br>',
							'<h6>Email: ',$value['email'],'</h6>';
						}
					}

				}catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
	}
	}
?>