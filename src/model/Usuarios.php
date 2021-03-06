<?php 
			
	/**
	 * Generated by Getz Framework.
	 * 
	 * @author  Mario Sakamoto <mskamot@gmail.com>
	 * @see     https://wtag.com.br/getz
	 * @since   1.0.0
	 * @version 1.0.0	
	 */
	 
	namespace src\model; 

	class Usuarios {
			
		private $id;
		private $usuario;
		private $email;
		private $senha;
		private $foto;
		private $access_token;
		private $access_token_expiration;
		private $password_token;
		private $password_token_expiration;
		private $activation_token;
		private $activation_token_expiration;
		private $cadastrado;
		private $modificado;
		private $situacoes_registros;
		private $perfis;
			
		public function __construct() { }
			
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}		
					
		public function getUsuario() {
			return $this->usuario;
		}
		
		public function setUsuario($usuario) {
			$this->usuario = $usuario;
		}		
					
		public function getEmail() {
			return $this->email;
		}
		
		public function setEmail($email) {
			$this->email = $email;
		}		
					
		public function getSenha() {
			return $this->senha;
		}
		
		public function setSenha($senha) {
			$this->senha = $senha;
		}		
					
		public function getFoto() {
			return $this->foto;
		}
		
		public function setFoto($foto) {
			$this->foto = $foto;
		}		
					
		public function getAccess_token() {
			return $this->access_token;
		}
		
		public function setAccess_token($access_token) {
			$this->access_token = $access_token;
		}		
					
		public function getAccess_token_expiration() {
			return $this->access_token_expiration;
		}
		
		public function setAccess_token_expiration($access_token_expiration) {
			$this->access_token_expiration = $access_token_expiration;
		}		
					
		public function getPassword_token() {
			return $this->password_token;
		}
		
		public function setPassword_token($password_token) {
			$this->password_token = $password_token;
		}		
					
		public function getPassword_token_expiration() {
			return $this->password_token_expiration;
		}
		
		public function setPassword_token_expiration($password_token_expiration) {
			$this->password_token_expiration = $password_token_expiration;
		}		
					
		public function getActivation_token() {
			return $this->activation_token;
		}
		
		public function setActivation_token($activation_token) {
			$this->activation_token = $activation_token;
		}		
					
		public function getActivation_token_expiration() {
			return $this->activation_token_expiration;
		}
		
		public function setActivation_token_expiration($activation_token_expiration) {
			$this->activation_token_expiration = $activation_token_expiration;
		}		
					
		public function getCadastrado() {
			return $this->cadastrado;
		}
		
		public function setCadastrado($cadastrado) {
			$this->cadastrado = $cadastrado;
		}		
					
		public function getModificado() {
			return $this->modificado;
		}
		
		public function setModificado($modificado) {
			$this->modificado = $modificado;
		}		
					
		public function getSituacoes_registros() {
			return $this->situacoes_registros;
		}
		
		public function setSituacoes_registros($situacoes_registros) {
			$this->situacoes_registros = $situacoes_registros;
		}		
					
		public function getPerfis() {
			return $this->perfis;
		}
		
		public function setPerfis($perfis) {
			$this->perfis = $perfis;
		}		
					
	}
	
?>