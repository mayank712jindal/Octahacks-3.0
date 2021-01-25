<?php
	session_start();
    // if(isset($_SESSION["activeuser"])==false) header("location:signup.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>City Express | Fruits & Vegetables</title>
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
	<link rel="stylesheet" href="./css/harvest.css">
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/queries.css" />
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
	<link rel="shortcut icon" type="image/jpg" href="/favicon.ico" />
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
	<style>
	.badge-notify {
		background: red;
		position: relative;
		top: -20px;
		right: 10px;
	}

	.my-cart-icon-affix {
		position: fixed;
		z-index: 999;
	}
	</style>
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
		<!-- <div class="page-header">
    <h1>Products
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span
            class="badge badge-notify my-cart-badge"></span></span>
      </div> -->
		</h1>
		</div>
		<!-- <div class="hero-text-box">
			<h1 class="heading">Landing Image and text</h1>
			<p id="hero-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Nisi dicta vitae inventore ducimus eveniet minus porro beatae at officiis a
				laboriosam fuga architecto laudantium accusamus veritatis, doloribus exercitationem?
				Nesciunt, illo!</p>
		</div> -->
	</header>
	<!-- Header Ends -->

	<h2>Fruits & Vegetables</h2>
	<div class="container">
		<div class="card-columns">
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/potato.png"  />
					</div>
					<div class="card-body">
						<h4 class="card-title">Potato</h4>
						<p class="card-text">0.5kg @ 20/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="1" data-name="product 1" data-summary="summary 1" data-price="20" data-quantity="1" data-image="./css/images/potato.png" id="potato"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/broccoli.png" />
					</div>
					<div class="card-body">
						<h4 class="card-title">Broccoli</h4>
						<p class="card-text">0.5kg @ 50/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="2" data-name="product 2" data-summary="summary 2" data-price="50" data-quantity="1" data-image="./css/images/broccoli.png" id="broccoli"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/corn.png" />
					</div>
					<div class="card-body">
						<h4 class="card-title">Corn</h4>
						<p class="card-text">1 piece @ 25/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="3" data-name="product 3" data-summary="summary 3" data-price="25" data-quantity="1" data-image="./css/images/corn.png" id="corn"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/tomato.png" />
					</div>
					<div class="card-body">
						<h4 class="card-title">Tomato</h4>
						<p class="card-text">0.5kg @ 15/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="4" data-name="product 4" data-summary="summary 4" data-price="15" data-quantity="1" data-image="./css/images/tomato.png" id="tomato"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/apple.png"  />
					</div>
					<div class="card-body">
						<h4 class="card-title">Apple</h4>
						<p class="card-text">1kg @ 60/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="5" data-name="product 5" data-summary="summary 5" data-price="60" data-quantity="1" data-image="./css/images/apple.png" id="apple"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/kiwi.png" />
					</div>
					<div class="card-body">
						<h4 class="card-title">Kiwi</h4>
						<p class="card-text">1 piece @ 20/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="6" data-name="product 6" data-summary="summary 6" data-price="20" data-quantity="1" data-image="./css/images/kiwi.png" id="kiwi"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/cherry.png" />
					</div>
					<div class="card-body">
						<h4 class="card-title">Cherry</h4>
						<p class="card-text">0.5kg Box @ 70/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="7" data-name="product 7" data-summary="summary 7" data-price="70" data-quantity="1" data-image="./css/images/cherr.png" id="cherry"  >Add to Cart </button>
					</div>
			</div>
			<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="./css/images/banana.png" />
					</div>
					<div class="card-body">
						<h4 class="card-title">Banana</h4>
						<p class="card-text">1 Dozen @ 40/-</p>
						<button class="btn btn-primary my-cart-btn product-harvest" data-id="8" data-name="product 8" data-summary="summary 8" data-price="40" data-quantity="1" data-image="./css/images/banana.png" id="banana" >Add to Cart</button>
					</div>
			</div>
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
			navbar.classList.remove("sticky")
		}
	});
	</script>
	<script src="./js/script.js" charset="utf-8" defer></script>
	<script src="./js/harvest.js" charset="utf-8" defer></script>
	<script src="./js/grocery.js" charset="utf-8" defer></script>

</body>

</html>