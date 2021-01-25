<?php
	session_start();
    // if(isset($_SESSION["activeuser"])==false) header("location:index.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>City Express | Home</title>
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
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/queries.css" />
	<link rel="shortcut icon" type="image/jpg" href="/favicon.ico" />

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg">
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
		<div class="hero-text-box">
			<h1 class="heading">Your city in <br>your pocket</h1>
			<p id="hero-para">Everything under one roof.</p>
		</div>
	</header>
	<!-- Header Ends -->

	<div class="container">
		<h2>All Products and Services</h2>
		<div class="card-columns">
			<div class="card">
				<a href="grocery.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/groceries.png" />
						<p class="card-text">Grocery</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="harvest.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/harvest.png" />
						<p class="card-text">Fruits & Vegetables</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="business.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/business.png" />
						<p class="card-text">Business Services</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="donation.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/donate.png" />
						<p class="card-text">Donation/Charity</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="repair.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/repair-tools.png" />
						<p class="card-text">Repair & Services</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="bills.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/receipt.png" />
						<p class="card-text">Bill Payment</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="ticket.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/ticket.png" />
						<p class="card-text">Tickets</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="property.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/assets.png" />
						<p class="card-text">Property</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="bank.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/bank.png" />
						<p class="card-text">Banking Services</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="pickdrop.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/pickdrop.png" />
						<p class="card-text">Pick & Drop</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="jobs.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/job-search.png" />
						<p class="card-text">Jobs</p>
					</div>
				</a>
			</div>
			<div class="card">
				<a href="insurance.php">
					<div class="card-body text-center">
						<img class="card-img" src="./css/images/safe.png" />
						<p class="card-text">Insurance</p>
					</div>
				</a>
			</div>
		</div>
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
			navbar.classList.remove("sticky")
		}
	});
	</script>
	<script src="./js/script.js" charset="utf-8" defer></script>
	<script src="./js/harvest.js" charset="utf-8" defer></script>
	<script src="./js/grocery.js" charset="utf-8" defer></script>
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>

</html>