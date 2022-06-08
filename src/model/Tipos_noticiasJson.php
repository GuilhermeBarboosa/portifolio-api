function foo() {
	let data = {
		"id": gV(gI("id")),
		"tipo_noticia": gV(gI("tipo_noticia")),
		"coresInput": {
			"id": gV(gI("cor"))
		},
		"situacoes_registrosInput": {
			"id": gV(gI("situacao_registro"))
		}
	};
	request("POST", dv_gateway + "/tipos_noticias", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "tipo_noticia",
				"type": "input",
				"id": "tipo_noticia",
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