<?php

	class Cliente{
		private $nome;
		private $usu;
		private $email;
		private $cpf
		private $telefone;
		private $senha;
		
		function __construct($nome, $usuario, $email,$cpf,$telefone, $senha){
			$this->nome = $nome;
			$this->usu = $usuario;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
			$this->senha = $senha;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getUsuario(){
			return $this->usu;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setUsuario($valor){
			$this->usuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setCpf($cpf){
			$this->cpf = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		public function setNome($valor){
			$this->name = $valor;
		}
		public function getTelefone(){
			return $this->name;
		}
		public function setTelefone($valor){
			$this->telefone = $valor;
		}
		
		public function adicionar(){
			
		}
		
		public function remover(){
			
		}
	}
	
?>