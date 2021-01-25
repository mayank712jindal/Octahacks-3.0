$(document).ready(() => {
	$("#btnSubmit").click(e => {
		// alert("Hello")
		e.preventDefault()
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var service = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			service = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			service = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			service = $("#gridRadio4").val()
		else if ($("#gridRadio5").prop("checked") == true)
			service = $("#gridRadio5").val()
		else if ($("#gridRadio6").prop("checked") == true)
			service = $("#gridRadio6").val()
		else if ($("#gridRadio7").prop("checked") == true)
			service = $("#gridRadio7").val()
		else
			service = $("#gridRadio8").val()
		var inputRequirement = $("#inputRequirement").val()
		var inputSomething = $("#inputSomething").val()
		var url = "php/business.php?inputName=" + inputName + "&inputContact=" + inputContact + "&service=" + service + "&inputRequirement=" + inputRequirement + "&inputSomething=" + inputSomething;
		// alert(url)
		$.get(url, (response) => {
			if (response == "BUSINESS") {
				// alert(response)
				location.href = "index.php"
			}
			else console.log(response);
		})
	})
})