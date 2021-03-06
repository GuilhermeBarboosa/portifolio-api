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
	
	class Tipos_alinhamentos_horizontaisDao {
		
		private $connection;
		private $size;
		private $log;
		private $columns = TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT. ID . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT . ID . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT. TIPO_ALINHAMENTO_HORIZONTAL . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT . TIPO_ALINHAMENTO_HORIZONTAL . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT. CLASSE . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT . CLASSE . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT. CADASTRADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT . CADASTRADO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT. MODIFICADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . TIPOS_ALINHAMENTOS_HORIZONTAIS . DOT . MODIFICADO . DOUBLE_QUOTES;
		
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
		
		public function create($tipos_alinhamentos_horizontais) {
			$query = INSERT . WHITE_SPACE . INTO . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . WHITE_SPACE . LEFT_PARENTHESES . TIPO_ALINHAMENTO_HORIZONTAL . COMMA . WHITE_SPACE . CLASSE . COMMA . WHITE_SPACE . CADASTRADO . COMMA . WHITE_SPACE . MODIFICADO . RIGHT_PARENTHESES . WHITE_SPACE . VALUES . WHITE_SPACE . LEFT_PARENTHESES . DOUBLE_QUOTES . $tipos_alinhamentos_horizontais->getTipo_alinhamento_horizontal() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_horizontais->getClasse() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_horizontais->getCadastrado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_horizontais->getModificado() . DOUBLE_QUOTES . RIGHT_PARENTHESES;
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
			$query = SELECT . WHITE_SPACE . $this->columns . WHITE_SPACE . FROM . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . WHITE_SPACE . $where;
			$this->setLog($query . WHITE_SPACE . $order);
			$result = $this->connection->execute($query . WHITE_SPACE . $order);
			$tipos_alinhamentos_horizontaisList = array();
			while ($row = $result->fetch_assoc()) {
				$tipos_alinhamentos_horizontais = new model\Tipos_alinhamentos_horizontais();
				$tipos_alinhamentos_horizontais->setId($row[TIPOS_ALINHAMENTOS_HORIZONTAIS . POINT . ID]);
				$tipos_alinhamentos_horizontais->setTipo_alinhamento_horizontal($row[TIPOS_ALINHAMENTOS_HORIZONTAIS . POINT . TIPO_ALINHAMENTO_HORIZONTAL]);
				$tipos_alinhamentos_horizontais->setClasse($row[TIPOS_ALINHAMENTOS_HORIZONTAIS . POINT . CLASSE]);
				$tipos_alinhamentos_horizontais->setCadastrado($row[TIPOS_ALINHAMENTOS_HORIZONTAIS . POINT . CADASTRADO]);
				$tipos_alinhamentos_horizontais->setModificado($row[TIPOS_ALINHAMENTOS_HORIZONTAIS . POINT . MODIFICADO]);
				$tipos_alinhamentos_horizontaisList[$count] = $tipos_alinhamentos_horizontais;
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
			return $tipos_alinhamentos_horizontaisList;
		}

		public function update($tipos_alinhamentos_horizontais) {
			$query = UPDATE . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . WHITE_SPACE . SET . WHITE_SPACE . ID . WHITE_SPACE . EQUALS . 
					WHITE_SPACE . DOUBLE_QUOTES . $tipos_alinhamentos_horizontais->getId() . DOUBLE_QUOTES;
			if (!is_null($tipos_alinhamentos_horizontais->getTipo_alinhamento_horizontal()) && !empty($tipos_alinhamentos_horizontais->getTipo_alinhamento_horizontal())) {
				$query .= COMMA . WHITE_SPACE . TIPO_ALINHAMENTO_HORIZONTAL . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$tipos_alinhamentos_horizontais->getTipo_alinhamento_horizontal() . DOUBLE_QUOTES;
			}
			if (!is_null($tipos_alinhamentos_horizontais->getClasse()) && !empty($tipos_alinhamentos_horizontais->getClasse())) {
				$query .= COMMA . WHITE_SPACE . CLASSE . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$tipos_alinhamentos_horizontais->getClasse() . DOUBLE_QUOTES;
			}
			$query .= COMMA . WHITE_SPACE . MODIFICADO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
					$tipos_alinhamentos_horizontais->getModificado() . DOUBLE_QUOTES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . EQUALS . 
					$tipos_alinhamentos_horizontais->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function delete($tipos_alinhamentos_horizontais) {
			$query = DELETE . WHITE_SPACE . FROM . WHITE_SPACE . TIPOS_ALINHAMENTOS_HORIZONTAIS . WHITE_SPACE . WHERE . WHITE_SPACE . ID . 
					WHITE_SPACE . EQUALS . WHITE_SPACE . $tipos_alinhamentos_horizontais->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

	}

?>