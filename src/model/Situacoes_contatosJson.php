function foo() {
	let data = {
		"id": gV(gI("id")),
		"situacao_contato": gV(gI("situacao_contato")),
		"coresInput": {
			"id": gV(gI("cor"))
		}
	};
	request("POST", dv_gateway + "/situacoes_contatos", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "situacao_contato",
				"type": "input",
				"id": "situacao_contato",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "cor",
				"type": "select",
				"id": "cor",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "cor 1"
					},
					{
						"value": 2,
						"content": "cor 2"
					}
				]
			}
		]
	]
}