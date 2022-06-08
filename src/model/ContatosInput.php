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

	class ContatosInput extends getz\Inject {
			
		private $id;
		private $contato;
		private $nome;
		private $email;
		private $celular;
		private $cadastrado;
		private $modificado;
		private $situacoes_contatosInput;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[CONTATO])) {
				$this->contato = $this->inject($request[CONTATO]);	
			}
			if (isset($request[NOME])) {
				$this->nome = $this->inject($request[NOME]);	
			}
			if (isset($request[EMAIL])) {
				$this->email = $this->inject($request[EMAIL]);	
			}
			if (isset($request[CELULAR])) {
				$this->celular = $this->inject($request[CELULAR]);	
			}
			if (isset($request[CADASTRADO])) {
				$this->cadastrado = $this->inject($request[CADASTRADO]);	
			}
			if (isset($request[MODIFICADO])) {
				$this->modificado = $this->inject($request[MODIFICADO]);	
			}
			if (isset($request[SITUACOES_CONTATOS_INPUT]) && isset($request[SITUACOES_CONTATOS_INPUT][ID])) {
				$situacoes_contatosInput = new model\Situacoes_contatosInput($request[SITUACOES_CONTATOS_INPUT]);
				$this->situacoes_contatosInput = $situacoes_contatosInput;	
			}
		}
					
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
					
		public function getContato() {
			return $this->contato;
		}
		
		public function setContato($contato) {
			$this->contato = $contato;
		}
					
		public function getNome() {
			return $this->nome;
		}
		
		public function setNome($nome) {
			$this->nome = $nome;
		}
					
		public function getEmail() {
			return $this->email;
		}
		
		public function setEmail($email) {
			$this->email = $email;
		}
					
		public function getCelular() {
			return $this->celular;
		}
		
		public function setCelular($celular) {
			$this->celular = $celular;
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
					
		public function getSituacoes_contatosInput() {
			return $this->situacoes_contatosInput;
		}
		
		public function setSituacoes_contatosInput($situacoes_contatosInput) {
			$this->situacoes_contatosInput = $situacoes_contatosInput;
		}	
			
		public function getError() {
			return $this->error;
		}
		
		private function setError($error) {
			$this->error = $error;
		}	

		public function isValid($method) {		
			if ($method == POST) {
				if (is_null($this->contato) || empty($this->contato)) {
					$this->setError(THE_ATTRIBUTE . CONTATO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->nome) || empty($this->nome)) {
					$this->setError(THE_ATTRIBUTE . NOME . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->email) || empty($this->email)) {
					$this->setError(THE_ATTRIBUTE . EMAIL . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->celular) || empty($this->celular)) {
					$this->setError(THE_ATTRIBUTE . CELULAR . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->situacoes_contatosInput) || is_null($this->situacoes_contatosInput->getId()) || empty($this->situacoes_contatosInput->getId())) {
					$this->setError(THE_ATTRIBUTE . SITUACOES_CONTATOS_INPUT . DOT . ID . IS_REQUIRED);
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
			$contatos = new model\Contatos();
			if (!is_null($this->id)) {
				$contatos->setId($this->id);
			}
			if (!is_null($this->contato)) {
				$contatos->setContato($this->contato);	
			}
			if (!is_null($this->nome)) {
				$contatos->setNome($this->nome);	
			}
			if (!is_null($this->email)) {
				$contatos->setEmail($this->email);	
			}
			if (!is_null($this->celular)) {
				$contatos->setCelular($this->celular);	
			} 
			$contatos->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$contatos->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			if (!is_null($this->situacoes_contatosInput)) {
				$situacoes_contatos = $this->situacoes_contatosInput->getEntity();
				$contatos->setSituacoes_contatos($situacoes_contatos);
			}
			return $contatos;
		}		
		
	}
	
?>