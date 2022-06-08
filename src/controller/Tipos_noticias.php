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
	
	class Tipos_noticias extends getz\Activator {
		
		public function __construct() { }
		
		public function init() {
			enableCORS();
			if ($_SERVER[REQUEST_METHOD] == strtoupper(POST)) {
				$tipos_noticiasInput = new model\Tipos_noticiasInput($this->request);
				if ($tipos_noticiasInput->isValid(POST)) {
					$this->daoFactory->beginTransaction();
					$tipos_noticiasDao = $this->daoFactory->getTipos_noticiasDao();
					$result = $tipos_noticiasDao->create($tipos_noticiasInput->getEntity());
					$this->log->write(POST, $tipos_noticiasDao->getLog(), $this->debug);
					$insertId = $tipos_noticiasDao->getInsertId();
					if ($result) {		
						$tipos_noticiasList = $tipos_noticiasDao->read(TIPOS_NOTICIAS . DOT . ID . WHITE_SPACE . EQUALS . 
								WHITE_SPACE . $insertId, STRING_EMPTY, false);
						$this->log->write(GET, $tipos_noticiasDao->getLog(), $this->debug);
						$tipos_noticiasOutput = new model\Tipos_noticiasOutput();
						$this->response[RESPONSE][TIPOS_NOTICIAS][VALUE] = $tipos_noticiasOutput->getOutputList(
								$tipos_noticiasList);									
						$this->response[RESPONSE][TIPOS_NOTICIAS][SIZE] = sizeOf(
								$this->response[RESPONSE][TIPOS_NOTICIAS][VALUE]);							
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
					$this->response[RESPONSE][MESSAGE] = $tipos_noticiasInput->getError();
				}
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(GET)) {
				if ($this->resource != STRING_EMPTY) {
					$this->where = TIPOS_NOTICIAS . DOT . ID . WHITE_SPACE . EQUALS . WHITE_SPACE . $this->resource;	
				}
				if ($this->order == STRING_EMPTY) {
					$this->order = TIPOS_NOTICIAS . DOT . ID . WHITE_SPACE . DESC;
				}
				$this->daoFactory->beginTransaction();
				$tipos_noticiasDao = $this->daoFactory->getTipos_noticiasDao();
				$tipos_noticiasList = $tipos_noticiasDao->read($this->where, $this->order, $this->hasPagination);	
				$this->log->write(GET, $tipos_noticiasDao->getLog(), $this->debug);
				$tipos_noticiasOutput = new model\Tipos_noticiasOutput();
				$this->response[RESPONSE][TIPOS_NOTICIAS][VALUE] = $tipos_noticiasOutput->getOutputList($tipos_noticiasList);													
				$this->daoFactory->close();				
				if ($this->hasPagination) {
					$this->response[RESPONSE][TIPOS_NOTICIAS][SIZE] = $tipos_noticiasDao->getSize();
					if ($this->response[RESPONSE][TIPOS_NOTICIAS][SIZE] == NUMBER_ZERO) {
						$this->response[RESPONSE] = null;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;
					}
				} else {
					$this->response[RESPONSE][TIPOS_NOTICIAS][SIZE] = sizeOf(
							$this->response[RESPONSE][TIPOS_NOTICIAS][VALUE]);	
					if ($this->response[RESPONSE][TIPOS_NOTICIAS][SIZE] == NUMBER_ZERO) {
						$this->response[RESPONSE] = null;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;
					}
				}
				$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(PUT)) {		
				if ($this->resource != STRING_EMPTY && !empty($this->request) && $this->request[ID] == 
						$this->resource) {
					$tipos_noticiasInput = new model\Tipos_noticiasInput($this->request);
					if ($tipos_noticiasInput->isValid(PUT)) {
						$this->daoFactory->beginTransaction();
						$tipos_noticiasDao = $this->daoFactory->getTipos_noticiasDao();
						$tipos_noticiasList = $tipos_noticiasDao->read(TIPOS_NOTICIAS . DOT . ID . WHITE_SPACE . EQUALS . 
								WHITE_SPACE . $this->resource, STRING_EMPTY, false);
						$this->log->write(GET, $tipos_noticiasDao->getLog(), $this->debug);
						if (!is_null($tipos_noticiasList) && sizeOf($tipos_noticiasList) > NUMBER_ZERO) {
							$result = $tipos_noticiasDao->update($tipos_noticiasInput->getEntity());
							$this->log->write(PUT, $tipos_noticiasDao->getLog(), $this->debug);	
							if ($result) {	
								$tipos_noticiasList = $tipos_noticiasDao->read(TIPOS_NOTICIAS . DOT . ID . WHITE_SPACE . EQUALS . 
										WHITE_SPACE . $this->resource, STRING_EMPTY, false);
								$this->log->write(GET, $tipos_noticiasDao->getLog(), $this->debug);
								$tipos_noticiasOutput = new model\Tipos_noticiasOutput();
								$this->response[RESPONSE][TIPOS_NOTICIAS][VALUE] = $tipos_noticiasOutput->getOutputList(
										$tipos_noticiasList);									
								$this->response[RESPONSE][TIPOS_NOTICIAS][SIZE] = sizeOf(
										$this->response[RESPONSE][TIPOS_NOTICIAS][VALUE]);							
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
						$this->response[RESPONSE][MESSAGE] = $tipos_noticiasInput->getError();
					}
				} else {
					$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
					$this->response[RESPONSE][MESSAGE] = BAD_REQUEST;	
				}
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(DELETE)) {
				if ($this->resource != STRING_EMPTY) {
					$this->daoFactory->beginTransaction();
					$tipos_noticiasDao = $this->daoFactory->getTipos_noticiasDao();
					$tipos_noticiasList = $tipos_noticiasDao->read(TIPOS_NOTICIAS . DOT . ID . WHITE_SPACE . EQUALS . WHITE_SPACE . 
							$this->resource, STRING_EMPTY, false);
					$this->log->write(GET, $tipos_noticiasDao->getLog(), $this->debug);
					if (!is_null($tipos_noticiasList) && sizeOf($tipos_noticiasList) > NUMBER_ZERO) {
						$result = $tipos_noticiasDao->delete($tipos_noticiasList[NUMBER_ZERO]);
						$this->log->write(DELETE, $tipos_noticiasDao->getLog(), $this->debug);	
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