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

	class Tipos_alinhamentos_horizontais {
			
		private $id;
		private $tipo_alinhamento_horizontal;
		private $classe;
		private $cadastrado;
		private $modificado;
			
		public function __construct() { }
			
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}		
					
		public function getTipo_alinhamento_horizontal() {
			return $this->tipo_alinhamento_horizontal;
		}
		
		public function setTipo_alinhamento_horizontal($tipo_alinhamento_horizontal) {
			$this->tipo_alinhamento_horizontal = $tipo_alinhamento_horizontal;
		}		
					
		public function getClasse() {
			return $this->classe;
		}
		
		public function setClasse($classe) {
			$this->classe = $classe;
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