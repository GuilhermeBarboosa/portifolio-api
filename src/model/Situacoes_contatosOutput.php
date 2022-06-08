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

	class Situacoes_contatosOutput implements \JsonSerializable {
			
		private $id;
		private $situacao_contato;
		private $cadastrado;
		private $modificado;
		private $coresOutput;
			
		public function __construct() { }
					
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
					
		public function getSituacao_contato() {
			return $this->situacao_contato;
		}
		
		public function setSituacao_contato($situacao_contato) {
			$this->situacao_contato = $situacao_contato;
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
					
		public function getCoresOutput() {
			return $this->coresOutput;
		}
		
		public function setCoresOutput($coresOutput) {
			$this->coresOutput = $coresOutput;
		}

		public function getOutput($situacoes_contatos) {
			if (!is_null($situacoes_contatos)) {
				$situacoes_contatosOutput = new model\Situacoes_contatosOutput();
				$situacoes_contatosOutput->setId($situacoes_contatos->getId());
				$situacoes_contatosOutput->setSituacao_contato($situacoes_contatos->getSituacao_contato());
				$coresOutput = new model\CoresOutput();
				$situacoes_contatosOutput->setCoresOutput($coresOutput->getOutput($situacoes_contatos->getCores()));
				return $situacoes_contatosOutput;
			} else {
				return null;
			}
		}
			
		public function getOutputList($situacoes_contatosList) {
			$situacoes_contatosOutputList = array();
			$count = NUMBER_ZERO;
			for ($x = NUMBER_ZERO; $x < sizeof($situacoes_contatosList); $x++) {
				$situacoes_contatosOutputList[$count] = $this->getOutput($situacoes_contatosList[$x]);
				$count++;
			}
			return $situacoes_contatosOutputList;
		}
		
		public function jsonSerialize() {
			$objectVars = get_object_vars($this);
			return array_filter($objectVars, function ($value) { 
				return $value != null;
			});
		}		
		
	}
	
?>