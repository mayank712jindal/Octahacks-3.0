$(document).ready(() => {
	$("#btnSubmit").click(e => {
		e.preventDefault()
		var inputName = $("#inputName").val()
		var inputContact = $("#inputContact").val()
		var inputPickup = $("#inputPickup").val()
		var inputDelivery = $("#inputDelivery").val()
		var inputSuggestion = $("#inputSuggestion").val()
		var url = "php/pickdrop.php?inputName=" + inputName + "&inputContact=" + inputContact + "&inputPickup=" + inputPickup + "&inputDelivery=" + inputDelivery + "&inputSuggestion=" + inputSuggestion;
		$.get(url, (response) => {
			if (response == "PICKDROP") location.href = "index.php"
			else console.log(response)
		})
	})
})