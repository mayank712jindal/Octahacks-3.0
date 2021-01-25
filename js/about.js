$(document).ready(function () {
	$("#btnCandidate").click(function () {
		// $("#btnSubmit").click((e) => {
		$("#btnSubmitCandidate").click((e) => {
			e.preventDefault();
			var cname = $("#cname").val();
			var phone = $("#phone").val();
			var email = $("#email").val();
			var dob = $("#dob").val();
			if ($("#radioMale").prop("checked") == true)
				var gender = $("#radioMale").val();
			else if ($("#radioFemale").prop("checked") == true)
				gender = $("#radioFemale").val();
			else gender = $("#radioOther").val();
			var qualification = $("#qualification").val();
			var coursename = $("#coursename").val();
			var year = $("#year").val();
			var uni = $("#uni").val();
			var per = $("#per").val();
			var compExp = $("#compExp").val();
			if ($("#yes").prop("checked") == true)
				var exp = $("#yes").val();
			else
				exp = $("#no").val()
			var city = $("#city").val()
			var hno = $("#hno").val();
			var area = $("#area").val();
			var land = $("#land").val();
			var url = "php/jobCandidate.php?cname=" + cname + "&phone=" + phone + "&email=" + email + "&dob=" + dob + "&gender=" + gender + "&qualification=" + qualification + "&coursename=" + coursename + "&year=" + year + "&uni=" + uni + "&per=" + per + "&compExp=" + compExp + "&exp=" + exp + "&city=" + city + "&hno=" + hno + "&area=" + area + "&land=" + land;
			$.get(url, (response) => {
				if (response == "CANDIDATE") {
					// alert(response)
					location.href = "index.php"
				}
				else console.log(response);
			})
			console.log(url);
		});
	});

	$("#btnEmployer").click(function () {
		// alert("hello employee");
		// $("#btnSubmit").click((e) => {
		$("#btnSubmitEmployer").click((e) => {
			e.preventDefault();
			var ename = $("#ename").val();
			var emailE = $("#emailE").val();
			var phoneE = $("#phoneE").val();
			var bname = $("#bname").val();
			var typeofjob = $("#typeofjob").val();
			var noofcanditates = $("#noofcanditates").val();
			var url = "php/jobEmployer.php?ename=" + ename + "&emailE=" + emailE + "&phoneE=" + phoneE + "&bname=" + bname + "&typeofjob=" + typeofjob + "&noofcanditates=" + noofcanditates;
			console.log(url);
			$.get(url, (response) => {
				if (response == "EMPLOYER") {
					// alert(response)
					location.href = "index.php"
				}
				else console.log(response);
			})
		});
	});
});