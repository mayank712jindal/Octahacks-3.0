$(document).ready(() => {
	$("#btnSubmit").click(function (e) {
		e.preventDefault();
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var ticket = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			ticket = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			ticket = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			ticket = $("#gridRadio4").val()
		else
			ticket = $("#gridRadio5").val()
		var inputSomethingnew = $("#inputSomethingnew").val()
		var inputSomething = $("#inputSomething").val()
		var url = "php/tickets.php?inputName=" + inputName + "&inputContact=" + inputContact + "&ticket=" + ticket + "&inputSomethingnew=" + inputSomethingnew + "&inputSomething=" + inputSomething;
		$.get(url, (response) => {
			if (response == "TICKETS") location.href = "index.php";
			else console.log(response);
		});
	});
});