function foo() {
	let data = {
		"id": gV(gI("id")),
		"pagina": gV(gI("pagina")),
		"conteudo": gV(gI("conteudo")),
		"palavras_chaves": gV(gI("palavras_chaves")),
		"situacoes_registrosInput": {
			"id": gV(gI("situacao_registro"))
		}
	};
	request("POST", dv_gateway + "/paginas", "", data, "controllerResponse", true, getCookie(gz_project));
}
			
{
	"form": [
		[
			{
				"label": "id",
				"type": "input",
				"id": "id",
				"class": "dv-integer dv-required"
			}
		],
		[
			{
				"label": "pagina",
				"type": "input",
				"id": "pagina",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "conteudo",
				"type": "input",
				"id": "conteudo",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "palavras_chaves",
				"type": "input",
				"id": "palavras_chaves",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "situacao_registro",
				"type": "select",
				"id": "situacao_registro",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "situacao_registro 1"
					},
					{
						"value": 2,
						"content": "situacao_registro 2"
					}
				]
			}
		]
	]
}