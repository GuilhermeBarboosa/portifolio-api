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
	use src\model;	

	class Tipos_colunasOutput implements \JsonSerializable {
			
		private $id;
		private $tipo_coluna;
		private $cadastrado;
		private $modificado;
			
		public function __construct() { }
					
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
					
		public function getTipo_coluna() {
			return $this->tipo_coluna;
		}
		
		public function setTipo_coluna($tipo_coluna) {
			$this->tipo_coluna = $tipo_coluna;
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

		public function getOutput($tipos_colunas) {
			if (!is_null($tipos_colunas)) {
				$tipos_colunasOutput = new model\Tipos_colunasOutput();
				$tipos_colunasOutput->setId($tipos_colunas->getId());
				$tipos_colunasOutput->setTipo_coluna($tipos_colunas->getTipo_coluna());
				return $tipos_colunasOutput;
			} else {
				return null;
			}
		}
			
		public function getOutputList($tipos_colunasList) {
			$tipos_colunasOutputList = array();
			$count = NUMBER_ZERO;
			for ($x = NUMBER_ZERO; $x < sizeof($tipos_colunasList); $x++) {
				$tipos_colunasOutputList[$count] = $this->getOutput($tipos_colunasList[$x]);
				$count++;
			}
			return $tipos_colunasOutputList;
		}
		
		public function jsonSerialize() {
			$objectVars = get_object_vars($this);
			return array_filter($objectVars, function ($value) { 
				return $value != null;
			});
		}		
		
	}
	
?>