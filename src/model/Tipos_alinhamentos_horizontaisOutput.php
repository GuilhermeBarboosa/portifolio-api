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

	class Tipos_alinhamentos_horizontaisOutput implements \JsonSerializable {
			
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

		public function getOutput($tipos_alinhamentos_horizontais) {
			if (!is_null($tipos_alinhamentos_horizontais)) {
				$tipos_alinhamentos_horizontaisOutput = new model\Tipos_alinhamentos_horizontaisOutput();
				$tipos_alinhamentos_horizontaisOutput->setId($tipos_alinhamentos_horizontais->getId());
				$tipos_alinhamentos_horizontaisOutput->setTipo_alinhamento_horizontal($tipos_alinhamentos_horizontais->getTipo_alinhamento_horizontal());
				$tipos_alinhamentos_horizontaisOutput->setClasse($tipos_alinhamentos_horizontais->getClasse());
				return $tipos_alinhamentos_horizontaisOutput;
			} else {
				return null;
			}
		}
			
		public function getOutputList($tipos_alinhamentos_horizontaisList) {
			$tipos_alinhamentos_horizontaisOutputList = array();
			$count = NUMBER_ZERO;
			for ($x = NUMBER_ZERO; $x < sizeof($tipos_alinhamentos_horizontaisList); $x++) {
				$tipos_alinhamentos_horizontaisOutputList[$count] = $this->getOutput($tipos_alinhamentos_horizontaisList[$x]);
				$count++;
			}
			return $tipos_alinhamentos_horizontaisOutputList;
		}
		
		public function jsonSerialize() {
			$objectVars = get_object_vars($this);
			return array_filter($objectVars, function ($value) { 
				return $value != null;
			});
		}		
		
	}
	
?>