function foo() {
	let data = {
		"id": gV(gI("id")),
		"slide": gV(gI("slide")),
		"foto": gV(gI("foto-base64")),
		"link": gV(gI("link")),
		"ordem": gV(gI("ordem")),
		"situacoes_registrosInput": {
			"id": gV(gI("situacao_registro"))
		}
	};
	request("POST", dv_gateway + "/slides", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "slide",
				"type": "input",
				"id": "slide",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "foto",
				"type": "photo",
				"id": "foto",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "link",
				"type": "input",
				"id": "link",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "ordem",
				"type": "input",
				"id": "ordem",
				"class": "dv-integer dv-required"
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