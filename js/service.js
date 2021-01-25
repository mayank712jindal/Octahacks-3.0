$(document).ready(() => {
	var phone = $("#phone").val()
	// console.log(phone);
	var url = "php/fetchJSON.php?phone=" + phone;
	// console.log(url);
	$.getJSON(url, function (jsonary) {
		// alert(JSON.stringify(jsonary))
		// console.log(JSON.stringify(jsonary))
		if (jsonary.length == 0) alert("INVALID ID");
		else {
			$("#txtname").val(jsonary[0].name)
			$("#txtaddress").val(jsonary[0].address)
		}
	})
})

function checkLoad() {
	var url = window.location.href;
	urlAry = url.split("#");
	// alert(JSON.stringify(urlAry))
	document.getElementById(urlAry[1]).style.display = "block";
}