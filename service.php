<?php
	session_start();
    if(isset($_SESSION["activeuser"])==false) header("location:signup.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>City Express | Services</title>
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
	<link rel="stylesheet" href="./css/service.css">
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/queries.css" />
	<link rel="shortcut icon" type="image/jpg" href="/favicon.ico" />
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</head>

<body onload="checkLoad();">
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
		<!-- <div class="hero-text-box"> -->
		<!-- <h1 class="heading">Landing Image and text</h1>
      <p id="hero-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Nisi dicta vitae inventore ducimus eveniet minus porro beatae at officiis a
        laboriosam fuga architecto laudantium accusamus veritatis, doloribus exercitationem?
        Nesciunt, illo!</p>
    </div> -->
	</header>
	<!-- Header Ends -->
	<h2>Repair & Services</h2>
	<div class="services" id="ro">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">RO REPAIR SERVICES</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href="thanks.php"><button class="btn btn-primary homebtn" >Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="ac">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">AC REPAIR/SERVICE</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href ="thanks.php"><button class="btn btn-primary homebtn">Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="inverter">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">INVERTER REPAIR</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href ="thanks.php"><button class="btn btn-primary homebtn">Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="washing">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">WASHING MACHINE REPAIR/SERVICE</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href="thanks.php"><button class="btn btn-primary homebtn">Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="electrician">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">ELECTRICIAN</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href="thanks.php"><button class="btn btn-primary homebtn">Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="plumber">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">PLUMBER</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href="thanks.php"><button class="btn btn-primary homebtn" >Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="microwave">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">MICROWAVE REPAIR</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href ="thanks.php"><button class="btn btn-primary homebtn">Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<div class="services" id="refrigerator">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">REFRIGERATOR REPAIR</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href="thanks.php"><button class="btn btn-primary homebtn" >Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>
	<div class="services" id="watertank">
		<table style="width:50%">
			<tr>
				<td style="width:50%">Services</td>
				<td><span style="color:red; float:right; font-weight:bold;">WATER TANK CLEANER</span></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>
					<!--name by php-->
					<input type="text" id="txtname" name="txtname">
				</td>
			</tr>
			<tr>
				<td>Mobile Number</td>
				<td>
					<!--mn by php-->
					<input type="text" id="phone" name="phone" value="<?php echo $_SESSION["activeuser"] ?>">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<!--add by php-->
					<input type="text" id="txtaddress" name="txtaddress">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center><a href="thanks.php"><button class="btn btn-primary homebtn" >Submit</button></a></center>
				</td>
			</tr>
		</table>
	</div>

	<!-- FOOTER -->
	<footer id=" footer">
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
		<div class="info">
			<table>
				<thead>
					<tr>
						<td>
							<a class="foot-links" href="#about">About Us</a>
						</td>
						<td>
							<a class="foot-links" href="#events">Stores</a>
						</td>
						<td>
							<a class="foot-links1" href="#team">Contact us</a>
						</td>

					</tr>
				</thead>
			</table>
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
	<script src="./js/service.js"></script>
</body>

</html>
