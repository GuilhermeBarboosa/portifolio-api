function foo() {
	let data = {
		"id": gV(gI("id")),
		"noticia": gV(gI("noticia")),
		"foto": gV(gI("foto-base64")),
		"legenda_foto": gV(gI("legenda_foto")),
		"resumo": gV(gI("resumo")),
		"conteudo": gV(gI("conteudo")),
		"palavras_chaves": gV(gI("palavras_chaves")),
		"usuariosInput": {
			"id": gV(gI("usuario"))
		},
		"situacoes_registrosInput": {
			"id": gV(gI("situacao_registro"))
		},
		"tipos_noticiasInput": {
			"id": gV(gI("tipo_noticia"))
		}
	};
	request("POST", dv_gateway + "/noticias", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "noticia",
				"type": "input",
				"id": "noticia",
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
				"label": "legenda_foto",
				"type": "input",
				"id": "legenda_foto",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "resumo",
				"type": "input",
				"id": "resumo",
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
				"label": "usuario",
				"type": "select",
				"id": "usuario",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "usuario 1"
					},
					{
						"value": 2,
						"content": "usuario 2"
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
				"label": "tipo_noticia",
				"type": "select",
				"id": "tipo_noticia",
				"class": "dv-required",
				"options": [
					{
						"value": 1,
						"content": "tipo_noticia 1"
					},
					{
						"value": 2,
						"content": "tipo_noticia 2"
					}
				]
			}
		]
	]
}