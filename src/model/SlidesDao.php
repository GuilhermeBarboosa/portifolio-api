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
	
	class SlidesDao {
		
		private $connection;
		private $size;
		private $log;
		private $columns = SLIDES . DOT. ID . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . ID . DOUBLE_QUOTES . COMMA . WHITE_SPACE . SLIDES . DOT. SLIDE . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . SLIDE . DOUBLE_QUOTES . COMMA . WHITE_SPACE . SLIDES . DOT. FOTO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . FOTO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . SLIDES . DOT. LINK . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . LINK . DOUBLE_QUOTES . COMMA . WHITE_SPACE . SLIDES . DOT. ORDEM . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . ORDEM . DOUBLE_QUOTES . COMMA . WHITE_SPACE . SLIDES . DOT. CADASTRADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . CADASTRADO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . SLIDES . DOT. MODIFICADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . SLIDES . DOT . MODIFICADO . DOUBLE_QUOTES;
		
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
		
		public function create($slides) {
			$query = INSERT . WHITE_SPACE . INTO . WHITE_SPACE . SLIDES . WHITE_SPACE . LEFT_PARENTHESES . SLIDE . COMMA . WHITE_SPACE . FOTO . COMMA . WHITE_SPACE . LINK . COMMA . WHITE_SPACE . ORDEM . COMMA . WHITE_SPACE . CADASTRADO . COMMA . WHITE_SPACE . MODIFICADO . COMMA . WHITE_SPACE . SITUACAO_REGISTRO . RIGHT_PARENTHESES . WHITE_SPACE . VALUES . WHITE_SPACE . LEFT_PARENTHESES . DOUBLE_QUOTES . $slides->getSlide() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $slides->getFoto() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $slides->getLink() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $slides->getOrdem() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $slides->getCadastrado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $slides->getModificado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $slides->getSituacoes_registros()->getId() . DOUBLE_QUOTES . RIGHT_PARENTHESES;
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function read($where, $order, $hasPagination) {
			$count = NUMBER_ZERO;
			if ($where != STRING_EMPTY) {
				$where = WHERE . WHITE_SPACE . $where . WHITE_SPACE . STRING_AND . WHITE_SPACE . SLIDES . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID;
			} else {
				$where = WHERE . WHITE_SPACE . SLIDES . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID;
			}
			if ($order != STRING_EMPTY) {
				$order = ORDER_BY . WHITE_SPACE . $order;
			}
			$situacoes_registrosDao = new model\Situacoes_registrosDao($this->connection);
			$query = SELECT . WHITE_SPACE . $this->columns . COMMA . WHITE_SPACE . $situacoes_registrosDao->getColumns() . WHITE_SPACE . FROM . WHITE_SPACE . SLIDES . WHITE_SPACE . SLIDES . COMMA . WHITE_SPACE . SITUACOES_REGISTROS . WHITE_SPACE . SITUACOES_REGISTROS . WHITE_SPACE . $where;
			$this->setLog($query . WHITE_SPACE . $order);
			$result = $this->connection->execute($query . WHITE_SPACE . $order);
			$slidesList = array();
			while ($row = $result->fetch_assoc()) {
				$slides = new model\Slides();
				$slides->setId($row[SLIDES . POINT . ID]);
				$slides->setSlide($row[SLIDES . POINT . SLIDE]);
				$slides->setFoto($row[SLIDES . POINT . FOTO]);
				$slides->setLink($row[SLIDES . POINT . LINK]);
				$slides->setOrdem($row[SLIDES . POINT . ORDEM]);
				$slides->setCadastrado($row[SLIDES . POINT . CADASTRADO]);
				$slides->setModificado($row[SLIDES . POINT . MODIFICADO]);
				$situacoes_registros = new model\Situacoes_registros();
				$situacoes_registros->setId($row[SITUACOES_REGISTROS . DOT . ID]);
				$situacoes_registros->setSituacao_registro($row[SITUACOES_REGISTROS . DOT . SITUACAO_REGISTRO]);
				$slides->setSituacoes_registros($situacoes_registros);
				$slidesList[$count] = $slides;
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
			return $slidesList;
		}

		public function update($slides) {
			$query = UPDATE . WHITE_SPACE . SLIDES . WHITE_SPACE . SET . WHITE_SPACE . ID . WHITE_SPACE . EQUALS . 
					WHITE_SPACE . DOUBLE_QUOTES . $slides->getId() . DOUBLE_QUOTES;
			if (!is_null($slides->getSlide()) && !empty($slides->getSlide())) {
				$query .= COMMA . WHITE_SPACE . SLIDE . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$slides->getSlide() . DOUBLE_QUOTES;
			}
			if (!is_null($slides->getFoto()) && !empty($slides->getFoto())) {
				$query .= COMMA . WHITE_SPACE . FOTO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$slides->getFoto() . DOUBLE_QUOTES;
			}
			if (!is_null($slides->getLink()) && !empty($slides->getLink())) {
				$query .= COMMA . WHITE_SPACE . LINK . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$slides->getLink() . DOUBLE_QUOTES;
			}
			if (!is_null($slides->getOrdem()) && !empty($slides->getOrdem())) {
				$query .= COMMA . WHITE_SPACE . ORDEM . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$slides->getOrdem() . DOUBLE_QUOTES;
			}
			if (!is_null($slides->getSituacoes_registros()) && !empty($slides->getSituacoes_registros()->getId()) &&  
					!empty($slides->getSituacoes_registros()->getId())) {
				$query .= COMMA . WHITE_SPACE . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$slides->getSituacoes_registros()->getId() . DOUBLE_QUOTES;
			}
			$query .= COMMA . WHITE_SPACE . MODIFICADO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
					$slides->getModificado() . DOUBLE_QUOTES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . EQUALS . 
					$slides->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function delete($slides) {
			$query = DELETE . WHITE_SPACE . FROM . WHITE_SPACE . SLIDES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . 
					WHITE_SPACE . EQUALS . WHITE_SPACE . $slides->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

	}

?>