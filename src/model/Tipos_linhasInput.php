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

	class Tipos_linhasInput extends getz\Inject {
			
		private $id;
		private $tipo_linha;
		private $cadastrado;
		private $modificado;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[TIPO_LINHA])) {
				$this->tipo_linha = $this->inject($request[TIPO_LINHA]);	
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
					
		public function getTipo_linha() {
			return $this->tipo_linha;
		}
		
		public function setTipo_linha($tipo_linha) {
			$this->tipo_linha = $tipo_linha;
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
				if (is_null($this->tipo_linha) || empty($this->tipo_linha)) {
					$this->setError(THE_ATTRIBUTE . TIPO_LINHA . IS_REQUIRED);
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
			$tipos_linhas = new model\Tipos_linhas();
			if (!is_null($this->id)) {
				$tipos_linhas->setId($this->id);
			}
			if (!is_null($this->tipo_linha)) {
				$tipos_linhas->setTipo_linha($this->tipo_linha);	
			} 
			$tipos_linhas->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$tipos_linhas->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			return $tipos_linhas;
		}		
		
	}
	
?>