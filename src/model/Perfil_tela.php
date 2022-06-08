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

	class Perfil_tela {
			
		private $id;
		private $cadastrado;
		private $modificado;
		private $perfis;
		private $tipos_permissoes;
		private $telas;
			
		public function __construct() { }
			
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
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
					
		public function getPerfis() {
			return $this->perfis;
		}
		
		public function setPerfis($perfis) {
			$this->perfis = $perfis;
		}		
					
		public function getTipos_permissoes() {
			return $this->tipos_permissoes;
		}
		
		public function setTipos_permissoes($tipos_permissoes) {
			$this->tipos_permissoes = $tipos_permissoes;
		}		
					
		public function getTelas() {
			return $this->telas;
		}
		
		public function setTelas($telas) {
			$this->telas = $telas;
		}		
					
	}
	
?>