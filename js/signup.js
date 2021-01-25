$(document).ready(function () {
	$("#signup").click(function (e) {
		e.preventDefault();
		var name = $("#name").val()
		var phone = $("#phone").val()
		var email = $("#email").val()
		var pass = $("#pass").val()
		var address = $("#address").val()
		var url = "php/signup.php?name=" + name + "&phone=" + phone + "&email=" + email + "&pass=" + pass + "&address=" + address;
		$.get(url, (response) => {
			if (response == "REGISTERED") {
				alert("Registered Successfully")
				location.href = "index.php";
			}
			else console.log(response)
		})
	});
});