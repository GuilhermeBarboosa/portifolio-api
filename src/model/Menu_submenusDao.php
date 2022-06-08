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
	
	class Menu_submenusDao {
		
		private $connection;
		private $size;
		private $log;
		private $columns = MENU_SUBMENUS . DOT. ID . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . MENU_SUBMENUS . DOT . ID . DOUBLE_QUOTES . COMMA . WHITE_SPACE . MENU_SUBMENUS . DOT. MENU_SUBMENU . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . MENU_SUBMENUS . DOT . MENU_SUBMENU . DOUBLE_QUOTES . COMMA . WHITE_SPACE . MENU_SUBMENUS . DOT. LINK . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . MENU_SUBMENUS . DOT . LINK . DOUBLE_QUOTES . COMMA . WHITE_SPACE . MENU_SUBMENUS . DOT. ORDEM . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . MENU_SUBMENUS . DOT . ORDEM . DOUBLE_QUOTES . COMMA . WHITE_SPACE . MENU_SUBMENUS . DOT. CADASTRADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . MENU_SUBMENUS . DOT . CADASTRADO . DOUBLE_QUOTES . COMMA . WHITE_SPACE . MENU_SUBMENUS . DOT. MODIFICADO . WHITE_SPACE . STRING_AS . WHITE_SPACE . DOUBLE_QUOTES . MENU_SUBMENUS . DOT . MODIFICADO . DOUBLE_QUOTES;
		
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
		
		public function create($menu_submenus) {
			$query = INSERT . WHITE_SPACE . INTO . WHITE_SPACE . MENU_SUBMENUS . WHITE_SPACE . LEFT_PARENTHESES . MENU_SUBMENU . COMMA . WHITE_SPACE . LINK . COMMA . WHITE_SPACE . ORDEM . COMMA . WHITE_SPACE . CADASTRADO . COMMA . WHITE_SPACE . MODIFICADO . COMMA . WHITE_SPACE . MENU . COMMA . WHITE_SPACE . SITUACAO_REGISTRO . RIGHT_PARENTHESES . WHITE_SPACE . VALUES . WHITE_SPACE . LEFT_PARENTHESES . DOUBLE_QUOTES . $menu_submenus->getMenu_submenu() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getLink() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getOrdem() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getCadastrado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getModificado() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getMenus()->getId() . DOUBLE_QUOTES . COMMA . WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getSituacoes_registros()->getId() . DOUBLE_QUOTES . RIGHT_PARENTHESES;
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function read($where, $order, $hasPagination) {
			$count = NUMBER_ZERO;
			if ($where != STRING_EMPTY) {
				$where = WHERE . WHITE_SPACE . $where . WHITE_SPACE . STRING_AND . WHITE_SPACE . MENU_SUBMENUS . DOT . MENU . WHITE_SPACE . EQUALS . WHITE_SPACE. MENUS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . MENU_SUBMENUS . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID;
			} else {
				$where = WHERE . WHITE_SPACE . MENU_SUBMENUS . DOT . MENU . WHITE_SPACE . EQUALS . WHITE_SPACE. MENUS . DOT . ID . WHITE_SPACE . STRING_AND . WHITE_SPACE . MENU_SUBMENUS . DOT . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE. SITUACOES_REGISTROS . DOT . ID;
			}
			if ($order != STRING_EMPTY) {
				$order = ORDER_BY . WHITE_SPACE . $order;
			}
			$menusDao = new model\MenusDao($this->connection);
			$situacoes_registrosDao = new model\Situacoes_registrosDao($this->connection);
			$query = SELECT . WHITE_SPACE . $this->columns . COMMA . WHITE_SPACE . $menusDao->getColumns() . COMMA . WHITE_SPACE . $situacoes_registrosDao->getColumns() . WHITE_SPACE . FROM . WHITE_SPACE . MENU_SUBMENUS . WHITE_SPACE . MENU_SUBMENUS . COMMA . WHITE_SPACE . MENUS . WHITE_SPACE . MENUS . COMMA . WHITE_SPACE . SITUACOES_REGISTROS . WHITE_SPACE . SITUACOES_REGISTROS . WHITE_SPACE . $where;
			$this->setLog($query . WHITE_SPACE . $order);
			$result = $this->connection->execute($query . WHITE_SPACE . $order);
			$menu_submenusList = array();
			while ($row = $result->fetch_assoc()) {
				$menu_submenus = new model\Menu_submenus();
				$menu_submenus->setId($row[MENU_SUBMENUS . POINT . ID]);
				$menu_submenus->setMenu_submenu($row[MENU_SUBMENUS . POINT . MENU_SUBMENU]);
				$menu_submenus->setLink($row[MENU_SUBMENUS . POINT . LINK]);
				$menu_submenus->setOrdem($row[MENU_SUBMENUS . POINT . ORDEM]);
				$menu_submenus->setCadastrado($row[MENU_SUBMENUS . POINT . CADASTRADO]);
				$menu_submenus->setModificado($row[MENU_SUBMENUS . POINT . MODIFICADO]);
				$menus = new model\Menus();
				$menus->setId($row[MENUS . DOT . ID]);
				$menus->setMenu($row[MENUS . DOT . MENU]);
				$menu_submenus->setMenus($menus);
				$situacoes_registros = new model\Situacoes_registros();
				$situacoes_registros->setId($row[SITUACOES_REGISTROS . DOT . ID]);
				$situacoes_registros->setSituacao_registro($row[SITUACOES_REGISTROS . DOT . SITUACAO_REGISTRO]);
				$menu_submenus->setSituacoes_registros($situacoes_registros);
				$menu_submenusList[$count] = $menu_submenus;
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
			return $menu_submenusList;
		}

		public function update($menu_submenus) {
			$query = UPDATE . WHITE_SPACE . MENU_SUBMENUS . WHITE_SPACE . SET . WHITE_SPACE . ID . WHITE_SPACE . EQUALS . 
					WHITE_SPACE . DOUBLE_QUOTES . $menu_submenus->getId() . DOUBLE_QUOTES;
			if (!is_null($menu_submenus->getMenu_submenu()) && !empty($menu_submenus->getMenu_submenu())) {
				$query .= COMMA . WHITE_SPACE . MENU_SUBMENU . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$menu_submenus->getMenu_submenu() . DOUBLE_QUOTES;
			}
			if (!is_null($menu_submenus->getLink()) && !empty($menu_submenus->getLink())) {
				$query .= COMMA . WHITE_SPACE . LINK . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$menu_submenus->getLink() . DOUBLE_QUOTES;
			}
			if (!is_null($menu_submenus->getOrdem()) && !empty($menu_submenus->getOrdem())) {
				$query .= COMMA . WHITE_SPACE . ORDEM . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$menu_submenus->getOrdem() . DOUBLE_QUOTES;
			}
			if (!is_null($menu_submenus->getMenus()) && !empty($menu_submenus->getMenus()->getId()) &&  
					!empty($menu_submenus->getMenus()->getId())) {
				$query .= COMMA . WHITE_SPACE . MENU . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$menu_submenus->getMenus()->getId() . DOUBLE_QUOTES;
			}
			if (!is_null($menu_submenus->getSituacoes_registros()) && !empty($menu_submenus->getSituacoes_registros()->getId()) &&  
					!empty($menu_submenus->getSituacoes_registros()->getId())) {
				$query .= COMMA . WHITE_SPACE . SITUACAO_REGISTRO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
						$menu_submenus->getSituacoes_registros()->getId() . DOUBLE_QUOTES;
			}
			$query .= COMMA . WHITE_SPACE . MODIFICADO . WHITE_SPACE . EQUALS . WHITE_SPACE . DOUBLE_QUOTES . 
					$menu_submenus->getModificado() . DOUBLE_QUOTES . WHITE_SPACE . WHERE . WHITE_SPACE . ID . EQUALS . 
					$menu_submenus->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

		public function delete($menu_submenus) {
			$query = DELETE . WHITE_SPACE . FROM . WHITE_SPACE . MENU_SUBMENUS . WHITE_SPACE . WHERE . WHITE_SPACE . ID . 
					WHITE_SPACE . EQUALS . WHITE_SPACE . $menu_submenus->getId();
			$this->setLog($query);
			return $this->connection->execute($query);
		}

	}

?>