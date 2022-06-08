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

	class Telas {
			
		private $id;
		private $tela;
		private $identificador;
		private $cadastrado;
		private $modificado;
		private $menus;
			
		public function __construct() { }
			
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}		
					
		public function getTela() {
			return $this->tela;
		}
		
		public function setTela($tela) {
			$this->tela = $tela;
		}		
					
		public function getIdentificador() {
			return $this->identificador;
		}
		
		public function setIdentificador($identificador) {
			$this->identificador = $identificador;
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
					
		public function getMenus() {
			return $this->menus;
		}
		
		public function setMenus($menus) {
			$this->menus = $menus;
		}		
					
	}
	
?>