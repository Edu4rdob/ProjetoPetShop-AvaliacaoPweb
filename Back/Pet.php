<?php
	session_start();
	require_once 'Controller.php';
	class Pet{
		private $nome;
		private $especie;
		private $raca;
		private $idade;
		
		function __construct($nome, $especie, $raca, $idade){
			$this->nome = $nome;
			$this->especie = $especie;
			$this->raca = $raca;
			$this->idade = $idade;
			
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getEspecie(){
			return $this->especie;
		}
		public function getRaca(){
			return $this->raca;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setEspecie($valor){
			$this->especie = $valor;
		}
		public function setRaca($valor){
			$this->raca = $valor;
		}
		public function setIdade($cpf){
			$this->Idade = $valor;
		}
		public function setNome($valor){
			$this->name = $valor;
		}
		public function adicionar(){
			$controler = new Controller();
			$controler->adicionarCliente();
		}
		public function remover(){
			
		}
	}
	
?>