$(document).ready(() => {
	$("#btnSubmit").click(e => {
		// alert("Hello")
		e.preventDefault()
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		if ($("#gridRadio1").prop("checked") == true)
			var donate = $("#gridRadio1").val()
		else if ($("#gridRadio2").prop("checked") == true)
			donate = $("#gridRadio2").val()
		else if ($("#gridRadio3").prop("checked") == true)
			donate = $("#gridRadio3").val()
		else if ($("#gridRadio4").prop("checked") == true)
			donate = $("#gridRadio4").val()
		else
			donate = $("#gridRadio5").val()
		var inputAddress = $("#inputAddress").val()
		var inputSomething = $("#inputSomething").val()
		// alert(inputName + " " + inputContact + " " + donate + " " + inputAddress + " " + inputSomething)
		var url = "php/donation.php?inputName=" + inputName + "&inputContact=" + inputContact + "&donate=" + donate + "&inputAddress=" + inputAddress + "&inputSomething=" + inputSomething;
		$.get(url, (response) => {
			if (response == "DONATION") {
				// alert(response)
				location.href = "index.php"
			}
			else console.log(response);
		})
	})
})