function foo() {
	let data = {
		"id": gV(gI("id")),
		"tipo_coluna": gV(gI("tipo_coluna"))
	};
	request("POST", dv_gateway + "/tipos_colunas", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "tipo_coluna",
				"type": "input",
				"id": "tipo_coluna",
				"class": "dv-required"
			}
		]
	]
}