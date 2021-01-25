<?php
	session_start();
    // if(isset($_SESSION["activeuser"])==false) header("location:signup.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>City Express | Contact Us</title>
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
	<link rel="stylesheet" href="./css/contact.css">
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
							<?php if(isset($_SESSION["activeuser"])==false){ ?> <li><a class="dropdown-item" href="signup.php" >Sign In</a></li> <?php } ?>
							<?php if(isset($_SESSION["activeuser"])==true){ ?> <li><?php echo $_SESSION["activeuser"] ?></li> <?php } ?>
							<?php if(isset($_SESSION["activeuser"])==true){ ?> <li><a class="dropdown-item" href="php/logout.php">Sign Out</a></li> <?php } ?>
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
			<h1 class="heading">Landing Image and text</h1>
			<p id="hero-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Nisi dicta vitae inventore ducimus eveniet minus porro beatae at officiis a
				laboriosam fuga architecto laudantium accusamus veritatis, doloribus exercitationem?
				Nesciunt, illo!</p>
		</div> -->
	</header>
	<!-- Header Ends -->

	<!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2>Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
	a matter of hours to help you.</p>

<div class="row">

	<!--Grid column-->
	<div class="col-md-9 mb-md-0 mb-5">
		<form id="contact-form" name="contact-form" action="mail.php" method="POST">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-0">
						<input type="text" id="name" name="name" class="form-control">
						<label for="name" class="">Your name</label>
					</div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-md-6">
					<div class="md-form mb-0">
						<input type="text" id="email" name="email" class="form-control">
						<label for="email" class="">Your email</label>
					</div>
				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">
				<div class="col-md-12">
					<div class="md-form mb-0">
						<input type="text" id="subject" name="subject" class="form-control">
						<label for="subject" class="">Subject</label>
					</div>
				</div>
			</div>
			<!--Grid row-->

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-md-12">

					<div class="md-form">
						<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
						<label for="message">Your message</label>
					</div>

				</div>
			</div>
			<!--Grid row-->

		</form>

		<div class="text-center text-md-left">
			<a class="btn btn-primary" >Send</a>
		</div>
		<div class="status"></div>
	</div>
	<!--Grid column-->

	<!--Grid column-->
	<div class="col-md-3 text-center">
		<ul class="list-unstyled mb-0">
			<li><i class="fas fa-map-marker-alt fa-2x"></i>
				<p>SCO-23, CHD, India</p>
			</li>

			<li><i class="fas fa-phone mt-4 fa-2x"></i>
				<p>+91 9779729032</p>
			</li>

			<li><i class="fas fa-envelope mt-4 fa-2x"></i>
				<p>cityexpresshelp@outlook.com</p>
			</li>
		</ul>
	</div>
	<!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->

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
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
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
	})
	</script>
	<script src="./js/script.js" charset="utf-8" defer></script>
	<script src="./js/harvest.js" charset="utf-8" defer></script>
	<script src="./js/grocery.js" charset="utf-8" defer></script>
</body>

</html>