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

	class NoticiasInput extends getz\Inject {
			
		private $id;
		private $noticia;
		private $foto;
		private $legenda_foto;
		private $resumo;
		private $conteudo;
		private $palavras_chaves;
		private $cadastrado;
		private $modificado;
		private $usuariosInput;
		private $situacoes_registrosInput;
		private $tipos_noticiasInput;
			
		private $error;	
			
		public function __construct($request) { 
			if (isset($request[ID])) {
				$this->id = $this->inject($request[ID]);	
			}
			if (isset($request[NOTICIA])) {
				$this->noticia = $this->inject($request[NOTICIA]);	
			}
			if (isset($request[FOTO])) {
				$this->foto = $this->inject($request[FOTO]);	
			}
			if (isset($request[LEGENDA_FOTO])) {
				$this->legenda_foto = $this->inject($request[LEGENDA_FOTO]);	
			}
			if (isset($request[RESUMO])) {
				$this->resumo = $this->inject($request[RESUMO]);	
			}
			if (isset($request[CONTEUDO])) {
				$this->conteudo = $this->inject($request[CONTEUDO]);	
			}
			if (isset($request[PALAVRAS_CHAVES])) {
				$this->palavras_chaves = $this->inject($request[PALAVRAS_CHAVES]);	
			}
			if (isset($request[CADASTRADO])) {
				$this->cadastrado = $this->inject($request[CADASTRADO]);	
			}
			if (isset($request[MODIFICADO])) {
				$this->modificado = $this->inject($request[MODIFICADO]);	
			}
			if (isset($request[USUARIOS_INPUT]) && isset($request[USUARIOS_INPUT][ID])) {
				$usuariosInput = new model\UsuariosInput($request[USUARIOS_INPUT]);
				$this->usuariosInput = $usuariosInput;	
			}
			if (isset($request[SITUACOES_REGISTROS_INPUT]) && isset($request[SITUACOES_REGISTROS_INPUT][ID])) {
				$situacoes_registrosInput = new model\Situacoes_registrosInput($request[SITUACOES_REGISTROS_INPUT]);
				$this->situacoes_registrosInput = $situacoes_registrosInput;	
			}
			if (isset($request[TIPOS_NOTICIAS_INPUT]) && isset($request[TIPOS_NOTICIAS_INPUT][ID])) {
				$tipos_noticiasInput = new model\Tipos_noticiasInput($request[TIPOS_NOTICIAS_INPUT]);
				$this->tipos_noticiasInput = $tipos_noticiasInput;	
			}
		}
					
		public function getId() {
			return $this->id;
		}
		
		public function setId($id) {
			$this->id = $id;
		}
					
		public function getNoticia() {
			return $this->noticia;
		}
		
		public function setNoticia($noticia) {
			$this->noticia = $noticia;
		}
					
		public function getFoto() {
			return $this->foto;
		}
		
		public function setFoto($foto) {
			$this->foto = $foto;
		}
					
		public function getLegenda_foto() {
			return $this->legenda_foto;
		}
		
		public function setLegenda_foto($legenda_foto) {
			$this->legenda_foto = $legenda_foto;
		}
					
		public function getResumo() {
			return $this->resumo;
		}
		
		public function setResumo($resumo) {
			$this->resumo = $resumo;
		}
					
		public function getConteudo() {
			return $this->conteudo;
		}
		
		public function setConteudo($conteudo) {
			$this->conteudo = $conteudo;
		}
					
		public function getPalavras_chaves() {
			return $this->palavras_chaves;
		}
		
		public function setPalavras_chaves($palavras_chaves) {
			$this->palavras_chaves = $palavras_chaves;
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
					
		public function getUsuariosInput() {
			return $this->usuariosInput;
		}
		
		public function setUsuariosInput($usuariosInput) {
			$this->usuariosInput = $usuariosInput;
		}
					
		public function getSituacoes_registrosInput() {
			return $this->situacoes_registrosInput;
		}
		
		public function setSituacoes_registrosInput($situacoes_registrosInput) {
			$this->situacoes_registrosInput = $situacoes_registrosInput;
		}
					
		public function getTipos_noticiasInput() {
			return $this->tipos_noticiasInput;
		}
		
		public function setTipos_noticiasInput($tipos_noticiasInput) {
			$this->tipos_noticiasInput = $tipos_noticiasInput;
		}	
			
		public function getError() {
			return $this->error;
		}
		
		private function setError($error) {
			$this->error = $error;
		}	

		public function isValid($method) {		
			if ($method == POST) {
				if (is_null($this->noticia) || empty($this->noticia)) {
					$this->setError(THE_ATTRIBUTE . NOTICIA . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->foto) || empty($this->foto)) {
					$this->setError(THE_ATTRIBUTE . FOTO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->legenda_foto) || empty($this->legenda_foto)) {
					$this->setError(THE_ATTRIBUTE . LEGENDA_FOTO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->resumo) || empty($this->resumo)) {
					$this->setError(THE_ATTRIBUTE . RESUMO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->conteudo) || empty($this->conteudo)) {
					$this->setError(THE_ATTRIBUTE . CONTEUDO . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->palavras_chaves) || empty($this->palavras_chaves)) {
					$this->setError(THE_ATTRIBUTE . PALAVRAS_CHAVES . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->usuariosInput) || is_null($this->usuariosInput->getId()) || empty($this->usuariosInput->getId())) {
					$this->setError(THE_ATTRIBUTE . USUARIOS_INPUT . DOT . ID . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->situacoes_registrosInput) || is_null($this->situacoes_registrosInput->getId()) || empty($this->situacoes_registrosInput->getId())) {
					$this->setError(THE_ATTRIBUTE . SITUACOES_REGISTROS_INPUT . DOT . ID . IS_REQUIRED);
					return false;					
				} 
				if (is_null($this->tipos_noticiasInput) || is_null($this->tipos_noticiasInput->getId()) || empty($this->tipos_noticiasInput->getId())) {
					$this->setError(THE_ATTRIBUTE . TIPOS_NOTICIAS_INPUT . DOT . ID . IS_REQUIRED);
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
			$noticias = new model\Noticias();
			if (!is_null($this->id)) {
				$noticias->setId($this->id);
			}
			if (!is_null($this->noticia)) {
				$noticias->setNoticia($this->noticia);	
			}
			if (!is_null($this->foto)) {
				$noticias->setFoto($this->foto);	
			}
			if (!is_null($this->legenda_foto)) {
				$noticias->setLegenda_foto($this->legenda_foto);	
			}
			if (!is_null($this->resumo)) {
				$noticias->setResumo($this->resumo);	
			}
			if (!is_null($this->conteudo)) {
				$noticias->setConteudo($this->conteudo);	
			}
			if (!is_null($this->palavras_chaves)) {
				$noticias->setPalavras_chaves($this->palavras_chaves);	
			} 
			$noticias->setCadastrado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			$noticias->setModificado(date(YMD_HIS, (time() - ONE_HOUR_IN_SECONDS * BRAZILIAN_TIME_ZONE)));
			if (!is_null($this->usuariosInput)) {
				$usuarios = $this->usuariosInput->getEntity();
				$noticias->setUsuarios($usuarios);
			}
			if (!is_null($this->situacoes_registrosInput)) {
				$situacoes_registros = $this->situacoes_registrosInput->getEntity();
				$noticias->setSituacoes_registros($situacoes_registros);
			}
			if (!is_null($this->tipos_noticiasInput)) {
				$tipos_noticias = $this->tipos_noticiasInput->getEntity();
				$noticias->setTipos_noticias($tipos_noticias);
			}
			return $noticias;
		}		
		
	}
	
?>