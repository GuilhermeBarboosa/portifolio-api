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
	
	class UsuariosDao {
		
		private $connection;
		private $size;
		private $log;
		private $columns = USUARIOS . DOT. ID . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . ID . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. USUARIO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . USUARIO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. EMAIL . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . EMAIL . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. SENHA . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . SENHA . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. FOTO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . FOTO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. ACCESS_TOKEN . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . ACCESS_TOKEN . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. ACCESS_TOKEN_EXPIRATION . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . ACCESS_TOKEN_EXPIRATION . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. PASSWORD_TOKEN . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . PASSWORD_TOKEN . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. PASSWORD_TOKEN_EXPIRATION . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . PASSWORD_TOKEN_EXPIRATION . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. ACTIVATION_TOKEN . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . ACTIVATION_TOKEN . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. ACTIVATION_TOKEN_EXPIRATION . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . ACTIVATION_TOKEN_EXPIRATION . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. CADASTRADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . CADASTRADO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . USUARIOS . DOT. MODIFICADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . USUARIOS . DOT . MODIFICADO . DOUBLE_QUOTES;
		
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
		
		public function create($usuarios) {
			$query = INSERT . WHITE_SPACE . INTO . WHITE_SPACE . USUARIOS . WHITE_SPACE . LEFT_PARENTHESES . USUARIO . COMMA . WHITE_SPACE . EMAIL . COMMA . WHITE_SPACE . SENHA . COMMA . WHITE_SPACE . FOTO . COMMA . WHITE_SPACE . ACCESS_TOKEN . COMMA . WHITE_SPACE . ACCESS_TOKEN_EXPIRATION . COMMA . WHITE_SPACE . PASSWORD_TOKEN . COMMA . WHITE_SPACE . PASSWORD_TOKEN_EXPIRATION . COMMA . WHITE_SPACE . ACTIVATION_TOKEN . COMMA . WHITE_SPACE . ACTIVATION_TOKEN_EXPIRATION . COMMA . WHITE_SPACE . CADASTRADO . COMMA . WHITE_SPACE . MODIFICADO . COMMA . WHITE_SPACE . SITUACAO_REGISTRO . COMMA . WHITE_SPACE . PERFIL . RIGHT_PARENTHESES . WHITE_SPACE . VALUES . WHITE_SPACE . LEFT_PARENTHESES . DOUBLE_QUOTES . $usuarios->getUsuario() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getEmail() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getSenha() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getFoto() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getAccess_token() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getAccess_token_expiration() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getPassword_token() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getPassword_token_expiration() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getActivation_token() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getActivation_token_expiration() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getCadastrado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getModificado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getSituacoes_registros()->getId() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getPerfis()->getId() . DOUBLE_QUOTES . RIGHT_PARENTHESES;
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function read($where, $order, $hasPagination) {
			$count = NUMBER_ZERO;
			if ($where != STRING_EMPTY) {
				$where = WHERE . WHITE_SPACE . $where . WHITE_SPACE . STRING_AND . WHITE_SPACE . USUARIOS . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . USUARIOS . DOT . PERFIL . WHITE_SPACE . EQUALS . WHITE_SPACE. PERFIS . DOT . ID;
			} else {
				$where = WHERE . WHITE_SPACE . USUARIOS . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . USUARIOS . DOT . PERFIL . WHITE_SPACE . EQUALS . WHITE_SPACE. PERFIS . DOT . ID;
			}
			if ($order != STRING_EMPTY) {
				$order = ORDER_BY . WHITE_SPACE . $order;
			}
			$situacoes_registrosDao = new model\Situacoes_registrosDao($this->connection);
			$perfisDao = new model\PerfisDao($this->connection);
			$query = SELECT . WHITE_SPACE . $this->columns . COMMA . WHITE_SPACE . $situacoes_registrosDao->getColumns() . COMMA . WHITE_SPACE . $perfisDao->getColumns() . WHITE_SPACE . FROM . WHITE_SPACE . USUARIOS . WHITE_SPACE . USUARIOS . COMMA . WHITE_SPACE . SITUACOES_REGISTROS . WHITE_SPACE . SITUACOES_REGISTROS . COMMA . WHITE_SPACE . PERFIS . WHITE_SPACE . PERFIS . WHITE_SPACE . $where;
			$this->setLog($query . WHITE_SPACE . $order);
			$result = $this->connection->execute($query . WHITE_SPACE . $order);
			$usuariosList = array();
			while ($row = $result->fetch_assoc()) {
				$usuarios = new model\Usuarios();
				$usuarios->setId($row[USUARIOS . POINT . ID]);
				$usuarios->setUsuario($row[USUARIOS . POINT . USUARIO]);
				$usuarios->setEmail($row[USUARIOS . POINT . EMAIL]);
				$usuarios->setSenha($row[USUARIOS . POINT . SENHA]);
				$usuarios->setFoto($row[USUARIOS . POINT . FOTO]);
				$usuarios->setAccess_token($row[USUARIOS . POINT . ACCESS_TOKEN]);
				$usuarios->setAccess_token_expiration($row[USUARIOS . POINT . ACCESS_TOKEN_EXPIRATION]);
				$usuarios->setPassword_token($row[USUARIOS . POINT . PASSWORD_TOKEN]);
				$usuarios->setPassword_token_expiration($row[USUARIOS . POINT . PASSWORD_TOKEN_EXPIRATION]);
				$usuarios->setActivation_token($row[USUARIOS . POINT . ACTIVATION_TOKEN]);
				$usuarios->setActivation_token_expiration($row[USUARIOS . POINT . ACTIVATION_TOKEN_EXPIRATION]);
				$usuarios->setCadastrado($row[USUARIOS . POINT . CADASTRADO]);
				$usuarios->setModificado($row[USUARIOS . POINT . MODIFICADO]);
				$situacoes_registros = new model\Situacoes_registros();
				$situacoes_registros->setId($row[SITUACOES_REGISTROS . DOT . ID]);
				$situacoes_registros->setSituacao_registro($row[SITUACOES_REGISTROS . DOT . SITUACAO_REGISTRO]);
				$usuarios->setSituacoes_registros($situacoes_registros);
				$perfis = new model\Perfis();
				$perfis->setId($row[PERFIS . DOT . ID]);
				$perfis->setPerfil($row[PERFIS . DOT . PERFIL]);
				$usuarios->setPerfis($perfis);
				$usuariosList[$count] = $usuarios;
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
			return $usuariosList;
		}

		public function update($usuarios) {
			$query = UPDATE . WHITE_SPACE . USUARIOS . WHITE_SPACE . SET . WHITE_SPACE . ID . WHITE_SPACE . EQUALS . 
					WHITE_SPACE . DOUBLE_QUOTES . $usuarios->getId() . DOUBLE_QUOTES;
			if (!is_null($usuarios->getUsuario()) && !empty($usuarios->getUsuario())) {
				$query .= COMMA . WHITE_SPACE . USUARIO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getUsuario() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getEmail()) && !empty($usuarios->getEmail())) {
				$query .= COMMA . WHITE_SPACE . EMAIL . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getEmail() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getSenha()) && !empty($usuarios->getSenha())) {
				$query .= COMMA . WHITE_SPACE . SENHA . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getSenha() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getFoto()) && !empty($usuarios->getFoto())) {
				$query .= COMMA . WHITE_SPACE . FOTO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getFoto() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getAccess_token()) && !empty($usuarios->getAccess_token())) {
				$query .= COMMA . WHITE_SPACE . ACCESS_TOKEN . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getAccess_token() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getAccess_token_expiration()) && !empty($usuarios->getAccess_token_expiration())) {
				$query .= COMMA . WHITE_SPACE . ACCESS_TOKEN_EXPIRATION . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getAccess_token_expiration() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getPassword_token()) && !empty($usuarios->getPassword_token())) {
				$query .= COMMA . WHITE_SPACE . PASSWORD_TOKEN . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getPassword_token() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getPassword_token_expiration()) && !empty($usuarios->getPassword_token_expiration())) {
				$query .= COMMA . WHITE_SPACE . PASSWORD_TOKEN_EXPIRATION . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getPassword_token_expiration() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getActivation_token()) && !empty($usuarios->getActivation_token())) {
				$query .= COMMA . WHITE_SPACE . ACTIVATION_TOKEN . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getActivation_token() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getActivation_token_expiration()) && !empty($usuarios->getActivation_token_expiration())) {
				$query .= COMMA . WHITE_SPACE . ACTIVATION_TOKEN_EXPIRATION . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getActivation_token_expiration() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getSituacoes_registros()) && !empty($usuarios->getSituacoes_registros()->getId()) &&  
					!empty($usuarios->getSituacoes_registros()->getId())) {
				$query .= COMMA . WHITE_SPACE . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getSituacoes_registros()->getId() . DOUBLE_QUOTES;
			}
			if (!is_null($usuarios->getPerfis()) && !empty($usuarios->getPerfis()->getId()) &&  
					!empty($usuarios->getPerfis()->getId())) {
				$query .= COMMA . WHITE_SPACE . PERFIL . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$usuarios->getPerfis()->getId() . DOUBLE_QUOTES;
			}
			$query .= COMMA . WHITE_SPACE . MODIFICADO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
					$usuarios->getModificado() . DOUBLE_QUOTES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . EQUALS . 
					$usuarios->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function delete($usuarios) {
			$query = DELETE . WHITE_SPACE . FROM . WHITE_SPACE . USUARIOS . WHITE_SPACE . WHERE . WHITE_SPACE . ID . 
					WHITE_SPACE . EQUALS . WHITE_SPACE . $usuarios->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

	}

?>