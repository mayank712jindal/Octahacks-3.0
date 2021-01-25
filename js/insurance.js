$(document).ready(() => {
	$("#btnSubmit").click(e => {
		// alert("Hello")
		e.preventDefault()
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var insurance = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			insurance = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			insurance = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			insurance = $("#gridRadio4").val()
		else
			insurance = $("#gridRadio5").val()
		// var inputAddress = $("#inputAddress").val()
		var inputSomething = $("#inputSomething").val()
		var url = "php/insurance.php?inputName=" + inputName + "&inputContact=" + inputContact + "&insurance=" + insurance + "&inputSomething=" + inputSomething;
		$.get(url, (response) => {
			if (response == "INSURANCE") {
				// alert(response)
				location.href = "index.php"
			}
			else console.log(response);
		})
	})
})