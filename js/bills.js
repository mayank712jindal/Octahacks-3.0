$(document).ready(() => {
	$("#btnSubmit").click(function (e) {
		e.preventDefault();
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var bill = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			bill = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			bill = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			bill = $("#gridRadio4").val()
		else
			bill = $("#gridRadio5").val()
		var inputSomething = $("#inputSomething").val()
		var url = "php/bills.php?inputName=" + inputName + "&inputContact=" + inputContact + "&bill=" + bill + "&inputSomething=" + inputSomething;
		$.get(url, (response) => {
			if (response == "BILLS") location.href = "index.php";
			else console.log(response);
		})
	});
})