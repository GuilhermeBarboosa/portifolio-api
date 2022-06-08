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

	class MenusInput extends getz\Inject {
			
		private $id;
		private $menu;
		private $link;
		private $ordem;
		private $cadastrado;
		private $modificado;
		private $tipos_menusInput;
		private $situacoes_registrosInput;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[MENU])) {
				$this->menu = $this->inject($request[MENU]);	
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
			if (isset($request[TIPOS_MENUS_INPUT]) && isset($request[TIPOS_MENUS_INPUT][ID])) {
				$tipos_menusInput = new model\Tipos_menusInput($request[TIPOS_MENUS_INPUT]);
				$this->tipos_menusInput = $tipos_menusInput;	
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
					
		public function getMenu() {
			return $this->menu;
		}
		
		public function setMenu($menu) {
			$this->menu = $menu;
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
					
		public function getTipos_menusInput() {
			return $this->tipos_menusInput;
		}
		
		public function setTipos_menusInput($tipos_menusInput) {
			$this->tipos_menusInput = $tipos_menusInput;
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
				if (is_null($this->menu) || empty($this->menu)) {
					$this->setError(THE_ATTRIBUTE . MENU . IS_REQUIRED);
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
				if (is_null($this->tipos_menusInput) || is_null($this->tipos_menusInput->getId()) || empty($this->tipos_menusInput->getId())) {
					$this->setError(THE_ATTRIBUTE . TIPOS_MENUS_INPUT . DOT . ID . IS_REQUIRED);
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
			$menus = new model\Menus();
			if (!is_null($this->id)) {
				$menus->setId($this->id);
			}
			if (!is_null($this->menu)) {
				$menus->setMenu($this->menu);	
			}
			if (!is_null($this->link)) {
				$menus->setLink($this->link);	
			}
			if (!is_null($this->ordem)) {
				$menus->setOrdem($this->ordem);	
			} 
			$menus->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$menus->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			if (!is_null($this->tipos_menusInput)) {
				$tipos_menus = $this->tipos_menusInput->getEntity();
				$menus->setTipos_menus($tipos_menus);
			}
			if (!is_null($this->situacoes_registrosInput)) {
				$situacoes_registros = $this->situacoes_registrosInput->getEntity();
				$menus->setSituacoes_registros($situacoes_registros);
			}
			return $menus;
		}		
		
	}
	
?>