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
	
	class Tipos_alinhamentos_verticaisDao {
		
		private $connection;
		private $size;
		private $log;
		private $columns = TIPOS_ALINHAMENTOS_VERTICAIS . DOT. ID . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_VERTICAIS . DOT . ID . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . DOT. TIPO_ALINHAMENTO_VERTICAL . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_VERTICAIS . DOT . TIPO_ALINHAMENTO_VERTICAL . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . DOT. CLASSE . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_VERTICAIS . DOT . CLASSE . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . DOT. CADASTRADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_VERTICAIS . DOT . CADASTRADO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . DOT. MODIFICADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_VERTICAIS . DOT . MODIFICADO . DOUBLE_QUOTES;
		
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
		
		public function create($tipos_alinhamentos_verticais) {
			$query = INSERT . WHITE_SPACE . INTO . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . WHITE_SPACE . LEFT_PARENTHESES . TIPO_ALINHAMENTO_VERTICAL . COMMA . WHITE_SPACE . CLASSE . COMMA . WHITE_SPACE . CADASTRADO . COMMA . WHITE_SPACE . MODIFICADO . RIGHT_PARENTHESES . WHITE_SPACE . VALUES . WHITE_SPACE . LEFT_PARENTHESES . DOUBLE_QUOTES . $tipos_alinhamentos_verticais->getTipo_alinhamento_vertical() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_verticais->getClasse() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_verticais->getCadastrado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_verticais->getModificado() . DOUBLE_QUOTES . RIGHT_PARENTHESES;
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function read($where, $order, $hasPagination) {
			$count = NUMBER_ZERO;
			if ($where != STRING_EMPTY) {
				$where = WHERE . WHITE_SPACE . $where;
			}
			if ($order != STRING_EMPTY) {
				$order = ORDER_BY . WHITE_SPACE . $order;
			}
			$query = SELECT . WHITE_SPACE . $this->columns . WHITE_SPACE . FROM . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . WHITE_SPACE . $where;
			$this->setLog($query . WHITE_SPACE . $order);
			$result = $this->connection->execute($query . WHITE_SPACE . $order);
			$tipos_alinhamentos_verticaisList = array();
			while ($row = $result->fetch_assoc()) {
				$tipos_alinhamentos_verticais = new model\Tipos_alinhamentos_verticais();
				$tipos_alinhamentos_verticais->setId($row[TIPOS_ALINHAMENTOS_VERTICAIS . POINT . ID]);
				$tipos_alinhamentos_verticais->setTipo_alinhamento_vertical($row[TIPOS_ALINHAMENTOS_VERTICAIS . POINT . TIPO_ALINHAMENTO_VERTICAL]);
				$tipos_alinhamentos_verticais->setClasse($row[TIPOS_ALINHAMENTOS_VERTICAIS . POINT . CLASSE]);
				$tipos_alinhamentos_verticais->setCadastrado($row[TIPOS_ALINHAMENTOS_VERTICAIS . POINT . CADASTRADO]);
				$tipos_alinhamentos_verticais->setModificado($row[TIPOS_ALINHAMENTOS_VERTICAIS . POINT . MODIFICADO]);
				$tipos_alinhamentos_verticaisList[$count] = $tipos_alinhamentos_verticais;
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
			return $tipos_alinhamentos_verticaisList;
		}

		public function update($tipos_alinhamentos_verticais) {
			$query = UPDATE . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . WHITE_SPACE . SET . WHITE_SPACE . ID . WHITE_SPACE . EQUALS . 
					WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_verticais->getId() . DOUBLE_QUOTES;
			if (!is_null($tipos_alinhamentos_verticais->getTipo_alinhamento_vertical()) && !empty($tipos_alinhamentos_verticais->getTipo_alinhamento_vertical())) {
				$query .= COMMA . WHITE_SPACE . TIPO_ALINHAMENTO_VERTICAL . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$tipos_alinhamentos_verticais->getTipo_alinhamento_vertical() . DOUBLE_QUOTES;
			}
			if (!is_null($tipos_alinhamentos_verticais->getClasse()) && !empty($tipos_alinhamentos_verticais->getClasse())) {
				$query .= COMMA . WHITE_SPACE . CLASSE . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$tipos_alinhamentos_verticais->getClasse() . DOUBLE_QUOTES;
			}
			$query .= COMMA . WHITE_SPACE . MODIFICADO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
					$tipos_alinhamentos_verticais->getModificado() . DOUBLE_QUOTES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . EQUALS . 
					$tipos_alinhamentos_verticais->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function delete($tipos_alinhamentos_verticais) {
			$query = DELETE . WHITE_SPACE . FROM . WHITE_SPACE . TIPOS_ALINHAMENTOS_VERTICAIS . WHITE_SPACE . WHERE . WHITE_SPACE . ID . 
					WHITE_SPACE . EQUALS . WHITE_SPACE . $tipos_alinhamentos_verticais->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

	}

?>