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

	class Curso {
			
		private $id;
		private $descricao;
		private $cadastrado;
		private $modificado;
			
		public function __construct() { }
			
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}		
					
		public function getDescricao() {
			return $this->descricao;
		}
		
		public function setDescricao($descricao) {
			$this->descricao = $descricao;
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
					
	}
	
?>