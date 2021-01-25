$(document).ready(() => {
	$("#btnSubmit").click(e => {
		// alert("Hello")
		e.preventDefault()
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var property = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			property = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			property = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			property = $("#gridRadio4").val()
		else
			property = $("#gridRadio5").val()
		var inputRequirement = $("#inputRequirement").val()
		var inputSomething = $("#inputSomething").val()
		// alert(inputName + " " + inputContact + " " + property + " " + inputAddress + " " + inputSomething)
		var url = "php/property.php?inputName=" + inputName + "&inputContact=" + inputContact + "&property=" + property + "&inputRequirement=" + inputRequirement + "&inputSomething=" + inputSomething;
		$.get(url, (response) => {
			if (response == "PROPERTY") {
				// alert(response)
				location.href = "index.php"
			}
			else console.log(response);
		})
	})
})