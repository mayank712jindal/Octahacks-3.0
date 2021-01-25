$(document).ready(function () {
	$("#signin").click(function (e) {
		e.preventDefault();
		var phone = $("#phonein").val();
		var your_pass = $("#your_pass").val();
		var url = "php/signin.php?phonein=" + phone + "&your_pass=" + your_pass;
		$.get(url, (response) => {
			if (response == "VALID") location.href = "index.php";
			else {
				alert(response);
			}
		})
	});
});