function foo() {
	let data = {
		"id": gV(gI("id")),
		"tipo_alinhamento_vertical": gV(gI("tipo_alinhamento_vertical")),
		"classe": gV(gI("classe"))
	};
	request("POST", dv_gateway + "/tipos_alinhamentos_verticais", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "tipo_alinhamento_vertical",
				"type": "input",
				"id": "tipo_alinhamento_vertical",
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