$(document).ready(() => {
	$("#btnSubmit").click(function (e) {
		e.preventDefault();
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var banking = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			banking = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			banking = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			banking = $("#gridRadio4").val()
		else
			banking = $("#gridRadio5").val()
		var inputAge = $("#inputAge").val()
		var inputRequirement = $("#inputRequirement").val()
		var inputSomething = $("#inputSomething").val()
		var url = "php/bank.php?inputName=" + inputName + "&inputContact=" + inputContact + "&banking=" + banking + "&inputAge=" + inputAge + "&inputRequirement=" + inputRequirement + "&inputSomething=" + inputSomething;
		$.get(url, (response) => {
			if (response == "BANK") location.href = "index.php";
			else console.log(response);
		})
	});
})