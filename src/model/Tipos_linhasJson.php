function foo() {
	let data = {
		"id": gV(gI("id")),
		"tipo_linha": gV(gI("tipo_linha"))
	};
	request("POST", dv_gateway + "/tipos_linhas", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "tipo_linha",
				"type": "input",
				"id": "tipo_linha",
				"class": "dv-required"
			}
		]
	]
}