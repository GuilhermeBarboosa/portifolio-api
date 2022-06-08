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
	
	class NoticiasDao {
		
		private $connection;
		private $size;
		private $log;
		private $columns = NOTICIAS . DOT. ID . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . ID . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. NOTICIA . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . NOTICIA . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. FOTO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . FOTO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. LEGENDA_FOTO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . LEGENDA_FOTO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. RESUMO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . RESUMO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. CONTEUDO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . CONTEUDO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. PALAVRAS_CHAVES . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . PALAVRAS_CHAVES . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. CADASTRADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . CADASTRADO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . NOTICIAS . DOT. MODIFICADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . NOTICIAS . DOT . MODIFICADO . DOUBLE_QUOTES;
		
		public function __construct($connection) {
			$this->connection = $connection;
		}
		
		public function getInsertId() {
			return $this->connection->getInsertId();
		}

		public function getSize() {
			return $this->size;
		}

		private function setLog($log) {
			$this->log = $log;
		}
		
		public function getLog() {
			return $this->log;
		}
		
		public function getColumns() {
			return $this->columns;
		}
		
		public function create($noticias) {
			$query = INSERT . WHITE_SPACE . INTO . WHITE_SPACE . NOTICIAS . WHITE_SPACE . LEFT_PARENTHESES . NOTICIA . COMMA . WHITE_SPACE . FOTO . COMMA . WHITE_SPACE . LEGENDA_FOTO . COMMA . WHITE_SPACE . RESUMO . COMMA . WHITE_SPACE . CONTEUDO . COMMA . WHITE_SPACE . PALAVRAS_CHAVES . COMMA . WHITE_SPACE . CADASTRADO . COMMA . WHITE_SPACE . MODIFICADO . COMMA . WHITE_SPACE . USUARIO . COMMA . WHITE_SPACE . SITUACAO_REGISTRO . COMMA . WHITE_SPACE . TIPO_NOTICIA . RIGHT_PARENTHESES . WHITE_SPACE . VALUES . WHITE_SPACE . LEFT_PARENTHESES . DOUBLE_QUOTES . $noticias->getNoticia() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getFoto() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getLegenda_foto() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getResumo() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getConteudo() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getPalavras_chaves() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getCadastrado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getModificado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getUsuarios()->getId() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getSituacoes_registros()->getId() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $noticias->getTipos_noticias()->getId() . DOUBLE_QUOTES . RIGHT_PARENTHESES;
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function read($where, $order, $hasPagination) {
			$count = NUMBER_ZERO;
			if ($where != STRING_EMPTY) {
				$where = WHERE . WHITE_SPACE . $where . WHITE_SPACE . STRING_AND . WHITE_SPACE . NOTICIAS . DOT . USUARIO . WHITE_SPACE . EQUALS . WHITE_SPACE. USUARIOS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . NOTICIAS . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . NOTICIAS . DOT . TIPO_NOTICIA . WHITE_SPACE . EQUALS . WHITE_SPACE. TIPOS_NOTICIAS . DOT . ID;
			} else {
				$where = WHERE . WHITE_SPACE . NOTICIAS . DOT . USUARIO . WHITE_SPACE . EQUALS . WHITE_SPACE. USUARIOS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . NOTICIAS . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . NOTICIAS . DOT . TIPO_NOTICIA . WHITE_SPACE . EQUALS . WHITE_SPACE. TIPOS_NOTICIAS . DOT . ID;
			}
			if ($order != STRING_EMPTY) {
				$order = ORDER_BY . WHITE_SPACE . $order;
			}
			$usuariosDao = new model\UsuariosDao($this->connection);
			$situacoes_registrosDao = new model\Situacoes_registrosDao($this->connection);
			$tipos_noticiasDao = new model\Tipos_noticiasDao($this->connection);
			$query = SELECT . WHITE_SPACE . $this->columns . COMMA . WHITE_SPACE . $usuariosDao->getColumns() . COMMA . WHITE_SPACE . $situacoes_registrosDao->getColumns() . COMMA . WHITE_SPACE . $tipos_noticiasDao->getColumns() . WHITE_SPACE . FROM . WHITE_SPACE . NOTICIAS . WHITE_SPACE . NOTICIAS . COMMA . WHITE_SPACE . USUARIOS . WHITE_SPACE . USUARIOS . COMMA . WHITE_SPACE . SITUACOES_REGISTROS . WHITE_SPACE . SITUACOES_REGISTROS . COMMA . WHITE_SPACE . TIPOS_NOTICIAS . WHITE_SPACE . TIPOS_NOTICIAS . WHITE_SPACE . $where;
			$this->setLog($query . WHITE_SPACE . $order);
			$result = $this->connection->execute($query . WHITE_SPACE . $order);
			$noticiasList = array();
			while ($row = $result->fetch_assoc()) {
				$noticias = new model\Noticias();
				$noticias->setId($row[NOTICIAS . POINT . ID]);
				$noticias->setNoticia($row[NOTICIAS . POINT . NOTICIA]);
				$noticias->setFoto($row[NOTICIAS . POINT . FOTO]);
				$noticias->setLegenda_foto($row[NOTICIAS . POINT . LEGENDA_FOTO]);
				$noticias->setResumo($row[NOTICIAS . POINT . RESUMO]);
				$noticias->setConteudo($row[NOTICIAS . POINT . CONTEUDO]);
				$noticias->setPalavras_chaves($row[NOTICIAS . POINT . PALAVRAS_CHAVES]);
				$noticias->setCadastrado($row[NOTICIAS . POINT . CADASTRADO]);
				$noticias->setModificado($row[NOTICIAS . POINT . MODIFICADO]);
				$usuarios = new model\Usuarios();
				$usuarios->setId($row[USUARIOS . DOT . ID]);
				$usuarios->setUsuario($row[USUARIOS . DOT . USUARIO]);
				$noticias->setUsuarios($usuarios);
				$situacoes_registros = new model\Situacoes_registros();
				$situacoes_registros->setId($row[SITUACOES_REGISTROS . DOT . ID]);
				$situacoes_registros->setSituacao_registro($row[SITUACOES_REGISTROS . DOT . SITUACAO_REGISTRO]);
				$noticias->setSituacoes_registros($situacoes_registros);
				$tipos_noticias = new model\Tipos_noticias();
				$tipos_noticias->setId($row[TIPOS_NOTICIAS . DOT . ID]);
				$tipos_noticias->setTipo_noticia($row[TIPOS_NOTICIAS . DOT . TIPO_NOTICIA]);
				$noticias->setTipos_noticias($tipos_noticias);
				$noticiasList[$count] = $noticias;
				$count++;
			}
			$this->connection->free($result);
			if ($hasPagination && $count > NUMBER_ZERO) {
				$result = $this->connection->execute($query);
				$size = NUMBER_ZERO;
				while ($row = $result->fetch_assoc()) {
					$size++;
				}
				$this->connection->free($result);				
				$this->size = $size;
			}
			return $noticiasList;
		}

		public function update($noticias) {
			$query = UPDATE . WHITE_SPACE . NOTICIAS . WHITE_SPACE . SET . WHITE_SPACE . ID . WHITE_SPACE . EQUALS . 
					WHITE_SPACE . DOUBLE_QUOTES . $noticias->getId() . DOUBLE_QUOTES;
			if (!is_null($noticias->getNoticia()) && !empty($noticias->getNoticia())) {
				$query .= COMMA . WHITE_SPACE . NOTICIA . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getNoticia() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getFoto()) && !empty($noticias->getFoto())) {
				$query .= COMMA . WHITE_SPACE . FOTO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getFoto() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getLegenda_foto()) && !empty($noticias->getLegenda_foto())) {
				$query .= COMMA . WHITE_SPACE . LEGENDA_FOTO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getLegenda_foto() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getResumo()) && !empty($noticias->getResumo())) {
				$query .= COMMA . WHITE_SPACE . RESUMO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getResumo() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getConteudo()) && !empty($noticias->getConteudo())) {
				$query .= COMMA . WHITE_SPACE . CONTEUDO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getConteudo() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getPalavras_chaves()) && !empty($noticias->getPalavras_chaves())) {
				$query .= COMMA . WHITE_SPACE . PALAVRAS_CHAVES . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getPalavras_chaves() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getUsuarios()) && !empty($noticias->getUsuarios()->getId()) &&  
					!empty($noticias->getUsuarios()->getId())) {
				$query .= COMMA . WHITE_SPACE . USUARIO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getUsuarios()->getId() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getSituacoes_registros()) && !empty($noticias->getSituacoes_registros()->getId()) &&  
					!empty($noticias->getSituacoes_registros()->getId())) {
				$query .= COMMA . WHITE_SPACE . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getSituacoes_registros()->getId() . DOUBLE_QUOTES;
			}
			if (!is_null($noticias->getTipos_noticias()) && !empty($noticias->getTipos_noticias()->getId()) &&  
					!empty($noticias->getTipos_noticias()->getId())) {
				$query .= COMMA . WHITE_SPACE . TIPO_NOTICIA . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$noticias->getTipos_noticias()->getId() . DOUBLE_QUOTES;
			}
			$query .= COMMA . WHITE_SPACE . MODIFICADO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
					$noticias->getModificado() . DOUBLE_QUOTES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . EQUALS . 
					$noticias->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function delete($noticias) {
			$query = DELETE . WHITE_SPACE . FROM . WHITE_SPACE . NOTICIAS . WHITE_SPACE . WHERE . WHITE_SPACE . ID . 
					WHITE_SPACE . EQUALS . WHITE_SPACE . $noticias->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

	}

?>