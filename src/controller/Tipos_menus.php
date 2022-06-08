<?php

	/**
	 * Generated by Getz Framework.
	 * 
	 * @author  Mario Sakamoto <mskamot@gmail.com>
	 * @see     https://wtag.com.br/getz
	 * @since   1.0.0
	 * @version 1.0.0
	 */
	 
	namespace src\controller;
	use lib\getz;
	use src\model;
	
	class Tipos_menus extends getz\Activator {
		
		public function __construct() { }
		
		public function init() {
			enableCORS();
			if ($_SERVER[REQUEST_METHOD] == strtoupper(POST)) {
				$tipos_menusInput = new model\Tipos_menusInput($this->request);
				if ($tipos_menusInput->isValid(POST)) {
					$this->daoFactory->beginTransaction();
					$tipos_menusDao = $this->daoFactory->getTipos_menusDao();
					$result = $tipos_menusDao->create($tipos_menusInput->getEntity());
					$this->log->write(POST, $tipos_menusDao->getLog(), $this->debug);
					$insertId = $tipos_menusDao->getInsertId();
					if ($result) {		
						$tipos_menusList = $tipos_menusDao->read(TIPOS_MENUS . DOT . ID . WHITE_SPACE . EQUALS . 
								WHITE_SPACE . $insertId, STRING_EMPTY, false);
						$this->log->write(GET, $tipos_menusDao->getLog(), $this->debug);
						$tipos_menusOutput = new model\Tipos_menusOutput();
						$this->response[RESPONSE][TIPOS_MENUS][VALUE] = $tipos_menusOutput->getOutputList(
								$tipos_menusList);									
						$this->response[RESPONSE][TIPOS_MENUS][SIZE] = sizeOf(
								$this->response[RESPONSE][TIPOS_MENUS][VALUE]);							
						$this->daoFactory->commit();
						$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
						$this->response[RESPONSE][MESSAGE] = SUCCESS;								
					} else {												
						$this->daoFactory->rollback();								
						$this->response[RESPONSE][STATUS] = NUMBER_FIVE_HUNDRED;
						$this->response[RESPONSE][MESSAGE] = INTERNAL_SERVER_ERROR;
					}
					$this->daoFactory->close();					
				} else {
					$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
					$this->response[RESPONSE][MESSAGE] = $tipos_menusInput->getError();
				}
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(GET)) {
				if ($this->resource != STRING_EMPTY) {
					$this->where = TIPOS_MENUS . DOT . ID . WHITE_SPACE . EQUALS . WHITE_SPACE . $this->resource;	
				}
				if ($this->order == STRING_EMPTY) {
					$this->order = TIPOS_MENUS . DOT . ID . WHITE_SPACE . DESC;
				}
				$this->daoFactory->beginTransaction();
				$tipos_menusDao = $this->daoFactory->getTipos_menusDao();
				$tipos_menusList = $tipos_menusDao->read($this->where, $this->order, $this->hasPagination);	
				$this->log->write(GET, $tipos_menusDao->getLog(), $this->debug);
				$tipos_menusOutput = new model\Tipos_menusOutput();
				$this->response[RESPONSE][TIPOS_MENUS][VALUE] = $tipos_menusOutput->getOutputList($tipos_menusList);													
				$this->daoFactory->close();				
				if ($this->hasPagination) {
					$this->response[RESPONSE][TIPOS_MENUS][SIZE] = $tipos_menusDao->getSize();
					if ($this->response[RESPONSE][TIPOS_MENUS][SIZE] == NUMBER_ZERO) {
						$this->response[RESPONSE] = null;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;
					}
				} else {
					$this->response[RESPONSE][TIPOS_MENUS][SIZE] = sizeOf(
							$this->response[RESPONSE][TIPOS_MENUS][VALUE]);	
					if ($this->response[RESPONSE][TIPOS_MENUS][SIZE] == NUMBER_ZERO) {
						$this->response[RESPONSE] = null;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;
					}
				}
				$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(PUT)) {		
				if ($this->resource != STRING_EMPTY && !empty($this->request) && $this->request[ID] == 
						$this->resource) {
					$tipos_menusInput = new model\Tipos_menusInput($this->request);
					if ($tipos_menusInput->isValid(PUT)) {
						$this->daoFactory->beginTransaction();
						$tipos_menusDao = $this->daoFactory->getTipos_menusDao();
						$tipos_menusList = $tipos_menusDao->read(TIPOS_MENUS . DOT . ID . WHITE_SPACE . EQUALS . 
								WHITE_SPACE . $this->resource, STRING_EMPTY, false);
						$this->log->write(GET, $tipos_menusDao->getLog(), $this->debug);
						if (!is_null($tipos_menusList) && sizeOf($tipos_menusList) > NUMBER_ZERO) {
							$result = $tipos_menusDao->update($tipos_menusInput->getEntity());
							$this->log->write(PUT, $tipos_menusDao->getLog(), $this->debug);	
							if ($result) {	
								$tipos_menusList = $tipos_menusDao->read(TIPOS_MENUS . DOT . ID . WHITE_SPACE . EQUALS . 
										WHITE_SPACE . $this->resource, STRING_EMPTY, false);
								$this->log->write(GET, $tipos_menusDao->getLog(), $this->debug);
								$tipos_menusOutput = new model\Tipos_menusOutput();
								$this->response[RESPONSE][TIPOS_MENUS][VALUE] = $tipos_menusOutput->getOutputList(
										$tipos_menusList);									
								$this->response[RESPONSE][TIPOS_MENUS][SIZE] = sizeOf(
										$this->response[RESPONSE][TIPOS_MENUS][VALUE]);							
								$this->daoFactory->commit();
								$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
								$this->response[RESPONSE][MESSAGE] = SUCCESS;									
							} else {							
								$this->daoFactory->rollback();
								$this->response[RESPONSE][STATUS] = NUMBER_FIVE_HUNDRED;
								$this->response[RESPONSE][MESSAGE] = INTERNAL_SERVER_ERROR;
							}
						} else {
							$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
							$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;	
						}
						$this->daoFactory->close();
					} else {
						$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
						$this->response[RESPONSE][MESSAGE] = $tipos_menusInput->getError();
					}
				} else {
					$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
					$this->response[RESPONSE][MESSAGE] = BAD_REQUEST;	
				}
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(DELETE)) {
				if ($this->resource != STRING_EMPTY) {
					$this->daoFactory->beginTransaction();
					$tipos_menusDao = $this->daoFactory->getTipos_menusDao();
					$tipos_menusList = $tipos_menusDao->read(TIPOS_MENUS . DOT . ID . WHITE_SPACE . EQUALS . WHITE_SPACE . 
							$this->resource, STRING_EMPTY, false);
					$this->log->write(GET, $tipos_menusDao->getLog(), $this->debug);
					if (!is_null($tipos_menusList) && sizeOf($tipos_menusList) > NUMBER_ZERO) {
						$result = $tipos_menusDao->delete($tipos_menusList[NUMBER_ZERO]);
						$this->log->write(DELETE, $tipos_menusDao->getLog(), $this->debug);	
						if ($result) {
							$this->daoFactory->commit();
							$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
							$this->response[RESPONSE][MESSAGE] = SUCCESS;							
						} else {
							$this->daoFactory->rollback();
							$this->response[RESPONSE][STATUS] = NUMBER_FIVE_HUNDRED;
							$this->response[RESPONSE][MESSAGE] = INTERNAL_SERVER_ERROR;	
						}
						$this->daoFactory->close();	
					} else {
						$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;	
					}
				} else {
					$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
					$this->response[RESPONSE][MESSAGE] = BAD_REQUEST;	
				}				
			} else {
				$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
				$this->response[RESPONSE][MESSAGE] = BAD_REQUEST;	
			}
			echo json_encode($this->response, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
		}
		
	}

?>