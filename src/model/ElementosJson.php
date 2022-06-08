function foo() {
	let data = {
		"id": gV(gI("id")),
		"elemento": gV(gI("elemento")),
		"ordem": gV(gI("ordem")),
		"tipos_linhasInput": {
			"id": gV(gI("tipo_linha"))
		},
		"tipos_colunasInput": {
			"id": gV(gI("tipo_coluna"))
		},
		"situacoes_registrosInput": {
			"id": gV(gI("situacao_registro"))
		},
		"coresInput": {
			"id": gV(gI("cor"))
		}
	};
	request("POST", dv_gateway + "/elementos", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "elemento",
				"type": "input",
				"id": "elemento",
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
				"label": "tipo_linha",
				"type": "select",
				"id": "tipo_linha",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "tipo_linha 1"
					},
					{
						"value": 2,
						"content": "tipo_linha 2"
					}
				]
			}
		],
		[
			{
				"label": "tipo_coluna",
				"type": "select",
				"id": "tipo_coluna",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "tipo_coluna 1"
					},
					{
						"value": 2,
						"content": "tipo_coluna 2"
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