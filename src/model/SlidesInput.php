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

	class SlidesInput extends getz\Inject {
			
		private $id;
		private $slide;
		private $foto;
		private $link;
		private $ordem;
		private $cadastrado;
		private $modificado;
		private $situacoes_registrosInput;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[SLIDE])) {
				$this->slide = $this->inject($request[SLIDE]);	
			}
			if (isset($request[FOTO])) {
				$this->foto = $this->inject($request[FOTO]);	
			}
			if (isset($request[LINK])) {
				$this->link = $this->inject($request[LINK]);	
			}
			if (isset($request[ORDEM])) {
				$this->ordem = $this->inject($request[ORDEM]);	
			}
			if (isset($request[CADASTRADO])) {
				$this->cadastrado = $this->inject($request[CADASTRADO]);	
			}
			if (isset($request[MODIFICADO])) {
				$this->modificado = $this->inject($request[MODIFICADO]);	
			}
			if (isset($request[SITUACOES_REGISTROS_INPUT]) && isset($request[SITUACOES_REGISTROS_INPUT][ID])) {
				$situacoes_registrosInput = new model\Situacoes_registrosInput($request[SITUACOES_REGISTROS_INPUT]);
				$this->situacoes_registrosInput = $situacoes_registrosInput;	
			}
		}
					
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
					
		public function getSlide() {
			return $this->slide;
		}
		
		public function setSlide($slide) {
			$this->slide = $slide;
		}
					
		public function getFoto() {
			return $this->foto;
		}
		
		public function setFoto($foto) {
			$this->foto = $foto;
		}
					
		public function getLink() {
			return $this->link;
		}
		
		public function setLink($link) {
			$this->link = $link;
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
					
		public function getSituacoes_registrosInput() {
			return $this->situacoes_registrosInput;
		}
		
		public function setSituacoes_registrosInput($situacoes_registrosInput) {
			$this->situacoes_registrosInput = $situacoes_registrosInput;
		}	
			
		public function getError() {
			return $this->error;
		}
		
		private function setError($error) {
			$this->error = $error;
		}	

		public function isValid($method) {		
			if ($method == POST) {
				if (is_null($this->slide) || empty($this->slide)) {
					$this->setError(THE_ATTRIBUTE . SLIDE . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->foto) || empty($this->foto)) {
					$this->setError(THE_ATTRIBUTE . FOTO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->link) || empty($this->link)) {
					$this->setError(THE_ATTRIBUTE . LINK . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->ordem) || empty($this->ordem)) {
					$this->setError(THE_ATTRIBUTE . ORDEM . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->situacoes_registrosInput) || is_null($this->situacoes_registrosInput->getId()) || empty($this->situacoes_registrosInput->getId())) {
					$this->setError(THE_ATTRIBUTE . SITUACOES_REGISTROS_INPUT . DOT . ID . IS_REQUIRED);
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
			$slides = new model\Slides();
			if (!is_null($this->id)) {
				$slides->setId($this->id);
			}
			if (!is_null($this->slide)) {
				$slides->setSlide($this->slide);	
			}
			if (!is_null($this->foto)) {
				$slides->setFoto($this->foto);	
			}
			if (!is_null($this->link)) {
				$slides->setLink($this->link);	
			}
			if (!is_null($this->ordem)) {
				$slides->setOrdem($this->ordem);	
			} 
			$slides->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$slides->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			if (!is_null($this->situacoes_registrosInput)) {
				$situacoes_registros = $this->situacoes_registrosInput->getEntity();
				$slides->setSituacoes_registros($situacoes_registros);
			}
			return $slides;
		}		
		
	}
	
?>