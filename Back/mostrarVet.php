
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
							echo $value['nome'],'<br>',$value['usuario'],'<br>',$value['email'];
						}
					}

				}catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
	}
	}
?>