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
	
	class Situacoes_registros extends getz\Activator {
		
		public function __construct() { }
		
		public function init() {
			enableCORS();
			if ($_SERVER[REQUEST_METHOD] == strtoupper(POST)) {
				$situacoes_registrosInput = new model\Situacoes_registrosInput($this->request);
				if ($situacoes_registrosInput->isValid(POST)) {
					$this->daoFactory->beginTransaction();
					$situacoes_registrosDao = $this->daoFactory->getSituacoes_registrosDao();
					$result = $situacoes_registrosDao->create($situacoes_registrosInput->getEntity());
					$this->log->write(POST, $situacoes_registrosDao->getLog(), $this->debug);
					$insertId = $situacoes_registrosDao->getInsertId();
					if ($result) {		
						$situacoes_registrosList = $situacoes_registrosDao->read(SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . EQUALS . 
								WHITE_SPACE . $insertId, STRING_EMPTY, false);
						$this->log->write(GET, $situacoes_registrosDao->getLog(), $this->debug);
						$situacoes_registrosOutput = new model\Situacoes_registrosOutput();
						$this->response[RESPONSE][SITUACOES_REGISTROS][VALUE] = $situacoes_registrosOutput->getOutputList(
								$situacoes_registrosList);									
						$this->response[RESPONSE][SITUACOES_REGISTROS][SIZE] = sizeOf(
								$this->response[RESPONSE][SITUACOES_REGISTROS][VALUE]);							
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
					$this->response[RESPONSE][MESSAGE] = $situacoes_registrosInput->getError();
				}
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(GET)) {
				if ($this->resource != STRING_EMPTY) {
					$this->where = SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . EQUALS . WHITE_SPACE . $this->resource;	
				}
				if ($this->order == STRING_EMPTY) {
					$this->order = SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . DESC;
				}
				$this->daoFactory->beginTransaction();
				$situacoes_registrosDao = $this->daoFactory->getSituacoes_registrosDao();
				$situacoes_registrosList = $situacoes_registrosDao->read($this->where, $this->order, $this->hasPagination);	
				$this->log->write(GET, $situacoes_registrosDao->getLog(), $this->debug);
				$situacoes_registrosOutput = new model\Situacoes_registrosOutput();
				$this->response[RESPONSE][SITUACOES_REGISTROS][VALUE] = $situacoes_registrosOutput->getOutputList($situacoes_registrosList);													
				$this->daoFactory->close();				
				if ($this->hasPagination) {
					$this->response[RESPONSE][SITUACOES_REGISTROS][SIZE] = $situacoes_registrosDao->getSize();
					if ($this->response[RESPONSE][SITUACOES_REGISTROS][SIZE] == NUMBER_ZERO) {
						$this->response[RESPONSE] = null;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;
					}
				} else {
					$this->response[RESPONSE][SITUACOES_REGISTROS][SIZE] = sizeOf(
							$this->response[RESPONSE][SITUACOES_REGISTROS][VALUE]);	
					if ($this->response[RESPONSE][SITUACOES_REGISTROS][SIZE] == NUMBER_ZERO) {
						$this->response[RESPONSE] = null;
						$this->response[RESPONSE][MESSAGE] = DATA_NOT_FOUND;
					}
				}
				$this->response[RESPONSE][STATUS] = NUMBER_TWO_HUNDRED;
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(PUT)) {		
				if ($this->resource != STRING_EMPTY && !empty($this->request) && $this->request[ID] == 
						$this->resource) {
					$situacoes_registrosInput = new model\Situacoes_registrosInput($this->request);
					if ($situacoes_registrosInput->isValid(PUT)) {
						$this->daoFactory->beginTransaction();
						$situacoes_registrosDao = $this->daoFactory->getSituacoes_registrosDao();
						$situacoes_registrosList = $situacoes_registrosDao->read(SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . EQUALS . 
								WHITE_SPACE . $this->resource, STRING_EMPTY, false);
						$this->log->write(GET, $situacoes_registrosDao->getLog(), $this->debug);
						if (!is_null($situacoes_registrosList) && sizeOf($situacoes_registrosList) > NUMBER_ZERO) {
							$result = $situacoes_registrosDao->update($situacoes_registrosInput->getEntity());
							$this->log->write(PUT, $situacoes_registrosDao->getLog(), $this->debug);	
							if ($result) {	
								$situacoes_registrosList = $situacoes_registrosDao->read(SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . EQUALS . 
										WHITE_SPACE . $this->resource, STRING_EMPTY, false);
								$this->log->write(GET, $situacoes_registrosDao->getLog(), $this->debug);
								$situacoes_registrosOutput = new model\Situacoes_registrosOutput();
								$this->response[RESPONSE][SITUACOES_REGISTROS][VALUE] = $situacoes_registrosOutput->getOutputList(
										$situacoes_registrosList);									
								$this->response[RESPONSE][SITUACOES_REGISTROS][SIZE] = sizeOf(
										$this->response[RESPONSE][SITUACOES_REGISTROS][VALUE]);							
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
						$this->response[RESPONSE][MESSAGE] = $situacoes_registrosInput->getError();
					}
				} else {
					$this->response[RESPONSE][STATUS] = NUMBER_FOUR_HUNDRED;
					$this->response[RESPONSE][MESSAGE] = BAD_REQUEST;	
				}
			} else if ($_SERVER[REQUEST_METHOD] == strtoupper(DELETE)) {
				if ($this->resource != STRING_EMPTY) {
					$this->daoFactory->beginTransaction();
					$situacoes_registrosDao = $this->daoFactory->getSituacoes_registrosDao();
					$situacoes_registrosList = $situacoes_registrosDao->read(SITUACOES_REGISTROS . DOT . ID . WHITE_SPACE . EQUALS . WHITE_SPACE . 
							$this->resource, STRING_EMPTY, false);
					$this->log->write(GET, $situacoes_registrosDao->getLog(), $this->debug);
					if (!is_null($situacoes_registrosList) && sizeOf($situacoes_registrosList) > NUMBER_ZERO) {
						$result = $situacoes_registrosDao->delete($situacoes_registrosList[NUMBER_ZERO]);
						$this->log->write(DELETE, $situacoes_registrosDao->getLog(), $this->debug);	
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