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

	class Situacoes_registrosInput extends getz\Inject {
			
		private $id;
		private $situacao_registro;
		private $cadastrado;
		private $modificado;
		private $coresInput;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[SITUACAO_REGISTRO])) {
				$this->situacao_registro = $this->inject($request[SITUACAO_REGISTRO]);	
			}
			if (isset($request[CADASTRADO])) {
				$this->cadastrado = $this->inject($request[CADASTRADO]);	
			}
			if (isset($request[MODIFICADO])) {
				$this->modificado = $this->inject($request[MODIFICADO]);	
			}
			if (isset($request[CORES_INPUT]) && isset($request[CORES_INPUT][ID])) {
				$coresInput = new model\CoresInput($request[CORES_INPUT]);
				$this->coresInput = $coresInput;	
			}
		}
					
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
					
		public function getSituacao_registro() {
			return $this->situacao_registro;
		}
		
		public function setSituacao_registro($situacao_registro) {
			$this->situacao_registro = $situacao_registro;
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
					
		public function getCoresInput() {
			return $this->coresInput;
		}
		
		public function setCoresInput($coresInput) {
			$this->coresInput = $coresInput;
		}	
			
		public function getError() {
			return $this->error;
		}
		
		private function setError($error) {
			$this->error = $error;
		}	

		public function isValid($method) {		
			if ($method == POST) {
				if (is_null($this->situacao_registro) || empty($this->situacao_registro)) {
					$this->setError(THE_ATTRIBUTE . SITUACAO_REGISTRO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->coresInput) || is_null($this->coresInput->getId()) || empty($this->coresInput->getId())) {
					$this->setError(THE_ATTRIBUTE . CORES_INPUT . DOT . ID . IS_REQUIRED);
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
			$situacoes_registros = new model\Situacoes_registros();
			if (!is_null($this->id)) {
				$situacoes_registros->setId($this->id);
			}
			if (!is_null($this->situacao_registro)) {
				$situacoes_registros->setSituacao_registro($this->situacao_registro);	
			} 
			$situacoes_registros->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$situacoes_registros->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			if (!is_null($this->coresInput)) {
				$cores = $this->coresInput->getEntity();
				$situacoes_registros->setCores($cores);
			}
			return $situacoes_registros;
		}		
		
	}
	
?>