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

	class Elementos {
			
		private $id;
		private $elemento;
		private $ordem;
		private $cadastrado;
		private $modificado;
		private $tipos_linhas;
		private $tipos_colunas;
		private $situacoes_registros;
		private $cores;
			
		public function __construct() { }
			
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}		
					
		public function getElemento() {
			return $this->elemento;
		}
		
		public function setElemento($elemento) {
			$this->elemento = $elemento;
		}		
					
		public function getOrdem() {
			return $this->ordem;
		}
		
		public function setOrdem($ordem) {
			$this->ordem = $ordem;
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
					
		public function getTipos_linhas() {
			return $this->tipos_linhas;
		}
		
		public function setTipos_linhas($tipos_linhas) {
			$this->tipos_linhas = $tipos_linhas;
		}		
					
		public function getTipos_colunas() {
			return $this->tipos_colunas;
		}
		
		public function setTipos_colunas($tipos_colunas) {
			$this->tipos_colunas = $tipos_colunas;
		}		
					
		public function getSituacoes_registros() {
			return $this->situacoes_registros;
		}
		
		public function setSituacoes_registros($situacoes_registros) {
			$this->situacoes_registros = $situacoes_registros;
		}		
					
		public function getCores() {
			return $this->cores;
		}
		
		public function setCores($cores) {
			$this->cores = $cores;
		}		
					
	}
	
?>