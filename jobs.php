<?php
	session_start();
    if(isset($_SESSION["activeuser"])==false) header("location:signup.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>City Express | Jobs</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
		integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
		rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Source+Sans+Pro&display=swap"
		rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
	<!-- Styles  -->
	<link rel="stylesheet" href="./css/jobs.css" />
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/queries.css" />
	<link rel="shortcut icon" type="image/jpg" href="/favicon.ico" />
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg sticky">
			<a class="navbar-brand" href="index.php">
				<img src="./css/images/logo.png" />
			</a>
			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navigation__icon">
					&nbsp;
				</span>
				</label>
			</button>

			<div class="collapse navbar-collapse flex-row-reverse" id="nav">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<ion-icon name="person-circle-outline"></ion-icon>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<?php if(isset($_SESSION["activeuser"])==false){ ?> <li><a class="dropdown-item"
									href="signup.php">Sign In</a></li> <?php } ?>
							<?php if(isset($_SESSION["activeuser"])==true){ ?> <li><?php echo $_SESSION["activeuser"] ?>
							</li> <?php } ?>
							<?php if(isset($_SESSION["activeuser"])==true){ ?> <li><a class="dropdown-item"
									href="php/logout.php">Sign Out</a></li> <?php } ?>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cart.php" class="cart">
							<ion-icon name="cart"></ion-icon><span class="spantag">0</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- <div class="hero-text-box">
			<h1 class="heading">Jobs</h1>
			<p id="hero-para">Need a job? or Need an employee?<br>
			Fill in the form below according to your requirements and we will connect you with the
			best possibilities.
		</p>
		</div> -->
	</header>
	<!-- Header Ends -->
	<div class="abc">
		<h2 class="heading">Jobs</h2>
		<p id="hero-para">Need a job? or Need an employee?<br>
			Fill in the form below according to your requirements and we will connect you with the
			best possibilities.
		</p>
	</div>
	<div>
		<center>
			<br>
			<button onclick="candidate()" id="btnCandidate">I’m a Candidate</button>
			<button onclick="employee()" id="btnEmployer">I’m an Employer</button>
			<!-- <button type="button" id="btnSubmitCandidate">SubmitCandidate</button>
			<button type="button" id="btnSubmitEmployer">SubmitEmployer</button> -->

		</center>
		<form id="regForm">
			<!-- <div class="tab"> -->
			<span>Candidate Details:</span>
			<p><input type="text" placeholder=" Candidate name*" name="cname" id="cname"></p>
			<p><input type="number" placeholder="Mobile Number*" name="phone" id="phone"></p>
			<p><input type="email" placeholder="E-mail" name="email" id="email"></p>
			<p><input type="date" placeholder="DOB" name="dob" id="dob"></p>
			<p>Gender
				<input type="radio" name="gen" id="radioMale" value="Male">Male
				<input type="radio" name="gen" id="radioFemale" value="Female">Female
				<input type="radio" name="gen" id="radioOther" value="Other">Other
			</p>
			<!-- </div> -->
			<!-- <div class="tab">-->
			<span>Qualification:</span>
			<p>
				<select name="qualification" id="qualification">
					<option value="" disabled="" selected="">Qualification</option>
					<option value="Post Graduation">Post Graduation</option>
					<option value="Grduation">Graduation</option>
					<option value="Senior Secondary">Senior Secondary</option>
					<option value="Metric">Metric</option>
				</select>
			</p>
			<p>Highest Qualification</p>
			<p><input type="text" placeholder="Course name*" name="coursename" id="coursename" required></p>
			<p><input type="text" placeholder="Year*" name="year" id="year" required></p>
			<p><input type="text" placeholder="Board/University*" name="uni" id="uni" required></p>
			<p><input type="number" placeholder="Percentage*" name="per" id="per" required></p>
			<p><input type="text" placeholder="Computer Expertise*" name="compExp" id="compExp" required></p>
			<!-- <p>Languages you can Read and Speak<br>
					<input type="checkbox" name="langs">English
					<input type="checkbox" name="langs">Hindi
					<input type="checkbox" name="langs">Punjabi
				</p> -->
			<!-- IT'S A COMPLEX TASK TO TAKE THE VALUES FROM CHECKBOX AND TO STORE THEM IN DATABASE -->
			<!-- </div> -->
			<!-- <div class="tab"> -->
			<span>Job Experience:</span>
			<p>
				<input type="radio" name="exp" value="y" id="yes">Yes
				<input type="radio" name="exp" id="no" value=" n" checked>No
			</p>
			<!-- <div id="disp">
					<p><input type="text" placeholder="Worked as*" name="work" id="work" required></p>
					<p><input type="number" placeholder="From Year*" name="fyr" id="fyr" required></p>
					<p><input type="number" placeholder="To Year*" name="tyr" id="tyr" required></p>
					<p><input type="number" placeholder="Salary*" name="sal" id="sal" required></p>
					<p><input type="number" placeholder="Current Salary Expectation*" name="demand" id="demand"
							required></p>
				</div> -->
			<!-- </div> -->
			<!-- <div class="tab"> -->
			<span>Home Address:</span>
			<p><input type="text" placeholder="City" name="city" id="city" required></p>
			<p><input type="text" placeholder="House Number*" name="hno" id="hno" required></p>
			<p><input type="text" placeholder="Area" name="area" id="area" required></p>
			<p><input type="text" placeholder="Landmark*" name="land" id="land" required></p>
	</div>
	<!-- <div style="overflow:auto;">
				<div style="float:right;">
					<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
				</div>
			</div> -->
	<!-- Circles which indicates the steps of the form: -->
	<!-- <div style="text-align:center;margin-top:40px;">
				<span class="step"></span>
				<span class="step"></span>
				<span class="step"></span>
				<span class="step"></span>
			</div> -->
	</form>

	<form id="regForm1">
		<!-- <div class="tab1"> -->
		<span>Employer Details:</span>
		<p><input type="text" placeholder="Name*" name="ename" id="ename"></p>
		<p><input type="email" placeholder="Email*" name="emailE" id="emailE"></p>
		<p><input type="number" placeholder="Mobile Number*" name="phoneE" id="phoneE"></p>
		<p><input type="text" placeholder="Business Number*" name="bname" id="bname"></p>
		<p><input type="text" placeholder="Job Type*" name="typeofjob" id="typeofjob"></p>
		<p><input type="text" placeholder="Candidates Required*" name="noofcanditates" id="noofcanditates"></p>
		<!-- <button type="button" onclick="validateform()" id="btnSubmit">Submit</button> -->
		<!-- <button type="button" id="btnSubmit">Submit</button> -->
		<!-- </div> -->
	</form>
	<center>
		<button type="button" id="btnSubmitCandidate">Submit</button>
		<br>
		<button type="button" id="btnSubmitEmployer">Submit</button>
	</center>
	</div>

	<!-- FOOTER -->
	<footer id="footer">
		<div class="row">
			<h3 class="line">CONNECT SOCIALLY</h3>

			<ul class="social-links">
				<li>
					<a href="#"> <i class="ion-social-facebook"></i> </a>
				</li>
				<li>
					<a href="#"> <i class="ion-social-twitter"></i> </a>
				</li>
				<li>
					<a href="#"> <i class="ion-social-googleplus"></i> </a>
				</li>
				<li>
					<a href="#"> <i class="ion-social-instagram"></i> </a>
				</li>
			</ul>
		</div>

		<div class="row">
			<p>
				Copyright &copy; 2020 by CITY EXPRESS. All rights reserved.
			</p>
		</div>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>

	<!-- sticky navbar -->
	<script>
	const navbar = document.querySelector("nav"),
		navposition = navbar.offsetTop;


	document.addEventListener("scroll", () => {
		if (window.pageYOffset > navposition) {
			navbar.classList.add("sticky");

		} else {
			navbar.classList.add("sticky")
		}
	});
	</script>
	<script src="./js/script.js" charset="utf-8" defer></script>
	<script src="./js/harvest.js" charset="utf-8" defer></script>
	<script src="./js/grocery.js" charset="utf-8" defer></script>
	<script src="./js/jobs.js" charset="utf-8" defer></script>
	<script src="./js/about.js" charset="utf-8" defer></script>
</body>

</html>