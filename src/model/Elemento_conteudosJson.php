function foo() {
	let data = {
		"id": gV(gI("id")),
		"elemento_conteudo": gV(gI("elemento_conteudo")),
		"ordem": gV(gI("ordem")),
		"elementosInput": {
			"id": gV(gI("elemento"))
		},
		"situacoes_registrosInput": {
			"id": gV(gI("situacao_registro"))
		},
		"tipos_alinhamentos_horizontaisInput": {
			"id": gV(gI("tipo_alinhamento_horizontal"))
		},
		"tipos_alinhamentos_verticaisInput": {
			"id": gV(gI("tipo_alinhamento_vertical"))
		}
	};
	request("POST", dv_gateway + "/elemento_conteudos", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "elemento_conteudo",
				"type": "input",
				"id": "elemento_conteudo",
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
				"label": "elemento",
				"type": "select",
				"id": "elemento",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "elemento 1"
					},
					{
						"value": 2,
						"content": "elemento 2"
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
		],
		[
			{
				"label": "tipo_alinhamento_horizontal",
				"type": "select",
				"id": "tipo_alinhamento_horizontal",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "tipo_alinhamento_horizontal 1"
					},
					{
						"value": 2,
						"content": "tipo_alinhamento_horizontal 2"
					}
				]
			}
		],
		[
			{
				"label": "tipo_alinhamento_vertical",
				"type": "select",
				"id": "tipo_alinhamento_vertical",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "tipo_alinhamento_vertical 1"
					},
					{
						"value": 2,
						"content": "tipo_alinhamento_vertical 2"
					}
				]
			}
		]
	]
}