function foo() {
	let data = {
		"id": gV(gI("id")),
		"descricao": gV(gI("descricao"))
	};
	request("POST", dv_gateway + "/curso", "", data, "controllerResponse", true, getCookie(gz_project));
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
				"label": "descricao",
				"type": "input",
				"id": "descricao",
				"class": "dv-required"
			}
		]
	]
}