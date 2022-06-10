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
	use lib\getz;
	use src\model;

	class CursoInput extends getz\Inject {
			
		private $id;
		private $descricao;
		private $cadastrado;
		private $modificado;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[DESCRICAO])) {
				$this->descricao = $this->inject($request[DESCRICAO]);	
			}
			if (isset($request[CADASTRADO])) {
				$this->cadastrado = $this->inject($request[CADASTRADO]);	
			}
			if (isset($request[MODIFICADO])) {
				$this->modificado = $this->inject($request[MODIFICADO]);	
			}
		}
					
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
			
		public function getError() {
			return $this->error;
		}
		
		private function setError($error) {
			$this->error = $error;
		}	

		public function isValid($method) {		
			if ($method == POST) {
				if (is_null($this->descricao) || empty($this->descricao)) {
					$this->setError(THE_ATTRIBUTE . DESCRICAO . IS_REQUIRED);
					return false;					
				} 
				return true;
			} else if ($method == PUT) {
				if (is_null($this->id) || empty($this->id)) {
					$this->setError(THE_ATTRIBUTE . ID . IS_REQUIRED);
					return false;					
				} else {
					return true;
				}
			}
		}
		
		public function getEntity() {
			$curso = new model\Curso();
			if (!is_null($this->id)) {
				$curso->setId($this->id);
			}
			if (!is_null($this->descricao)) {
				$curso->setDescricao($this->descricao);	
			} 
			$curso->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$curso->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			return $curso;
		}		
		
	}
	
?>