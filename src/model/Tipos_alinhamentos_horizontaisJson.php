function foo() {
	let data = {
		"id": gV(gI("id")),
		"tipo_alinhamento_horizontal": gV(gI("tipo_alinhamento_horizontal")),
		"classe": gV(gI("classe"))
	};
	request("POST", dv_gateway + "/tipos_alinhamentos_horizontais", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "tipo_alinhamento_horizontal",
				"type": "input",
				"id": "tipo_alinhamento_horizontal",
				"class": "dv-required"
			}
		],
		[
			{
				"label": "classe",
				"type": "input",
				"id": "classe",
				"class": "dv-required"
			}
		]
	]
}