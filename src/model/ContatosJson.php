function foo() {
	let data = {
		"id": gV(gI("id")),
		"contato": gV(gI("contato")),
		"nome": gV(gI("nome")),
		"email": gV(gI("email")),
		"celular": gV(gI("celular")),
		"situacoes_contatosInput": {
			"id": gV(gI("situacao_contato"))
		}
	};
	request("POST", dv_gateway + "/contatos", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "contato",
				"type": "input",
				"id": "contato",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "nome",
				"type": "input",
				"id": "nome",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "email",
				"type": "input",
				"id": "email",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "celular",
				"type": "input",
				"id": "celular",
				"class": "dv-cellphone dv-required"
			}
		],
		[
			{
				"label": "situacao_contato",
				"type": "select",
				"id": "situacao_contato",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "situacao_contato 1"
					},
					{
						"value": 2,
						"content": "situacao_contato 2"
					}
				]
			}
		]
	]
}