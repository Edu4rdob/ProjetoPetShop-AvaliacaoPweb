<?php
	require_once 'Controller.php';
	class Veterinario{
		private $nome;
		private $usu;
		private $email;
		private $cpf;
		private $telefone;
		private $senha;
		private $id;
		private $codigo;
		private $endereco;
		
		function __construct($nome, $usuario, $email,$cpf,$telefone,$id,$endereco, $codigo,$senha){
			$this->nome = $nome;
			$this->usu = $usuario;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
			$this->id = $id;
			$this->senha = $senha;
			$this->codigo=$codigo;
			$this->endereco= $endereco;
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
		public function getId(){
			return $this->id;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setCodigo($valor){
			$this->codigo = $valor;
		}
		public function setUsuario($valor){
			$this->usuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		public function setId($valor){
			$this->id = $valor;
		}
		public function setNome($valor){
			$this->name = $valor;
		}
		public function setEndereco($valor){
			$this->endereco = $valor;
		}
		public function adicionar(){
			$controler = new Controller();
			$controler->adicionarVeterinario();
		}
	}
	
?>