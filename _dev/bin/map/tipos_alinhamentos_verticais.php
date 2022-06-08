<?php 

	/**
	 * Generated by Getz Framework 
	 *
	 * @author Mario Sakamoto <mskamot@gmail.com>
	 * @see https://wtag.com.br/getz
	 */
	 
	/*
	 * SPL
	 */	 	
	spl_autoload_register(function ($class) {
		require_once("../../" . $class . ".php");
	});	 
			
	use lib\getz;
			
	$table = "tipos_alinhamentos_verticais";
			
	/*
	 * $fields = array("field" => "type");
	 *
	 * types: string16, string32, string64,
	 * integer, double,
	 * date, datetime, time, new, now,
	 * cpf, cnpj, cep, phone, cellphone,
	 * photo, photoWithPosition, position, upload
	 */ 
	$fields = array("id" => "integer",
			"tipo_alinhamento_vertical" => "string32",
			"classe" => "string32",
			"cadastrado" => "new",
			"modificado" => "now"
	);
				
	/*
	 *$fk = array("table" => "field");
	 */
	$fk = array(
	);
				
	// Set the table if this screen call another
	$call = "";
	
	// Set the column for answer after the call
	$answer = "";

	/*
	 * Builder
	 */
	$builder = new getz\Builder();
	$builder->entity($table, $fields, $fk);
	$builder->input($table, $fields, $fk);
	$builder->json($table, $fields, $fk);
	$builder->output($table, $fields, $fk);
	$builder->dao($table, $fields, $fk);
	$builder->daoFactory($table, $fields, $fk);
	$builder->controller($table, $fields, $fk, $answer);
	$builder->constants($table, $fields, $fk);
				
?>