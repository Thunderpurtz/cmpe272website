<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	$cookiebool = False ;
	if (isset($_COOKIE['last5visited'])) {
		$visited = json_decode($_COOKIE['last5visited'], true);
		$cookiebool = True ;
	}
	$count = count($visited) ;
	$reversevisited = array_reverse($visited) ;
?>

<html>
	<head>
		<title>STONX - Past 5 Searches</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">STONX</a></h1>
							</header>
						</div>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="about.php">About</a>
								<ul>
									<li><a href="#">Register</a></li>
									<li><a href="#">Mission Statement</a></li>
									<li><a href="#">History</a></li>
									<li>
										<a href="#">Our Affiliates &hellip;</a>
										<ul>
											<li><a href="#">MemeTrade</a></li>
											<li><a href="#">C@tCoin</a></li>
											<li><a href="#">Make Trading Great Again</a></li>
											<li><a href="#">Infidelity</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="contacts.php">Contacts</a></li>
							<li><a href="users.php">Users</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</nav>

				</div>

			<!-- MAIN SECTION -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
								<h2>
									<a href="users.php">
										<?php
											echo "Returned rows : $count" ;
										?>
									</a>
								</h2>
							</header>
							<div class="container">
								<!-- contacts card -->
								<div class="card card-default" id="card_contacts">
									<div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
										<ul class="list-group pull-down" id="contact-list">
											<li class="list-group-item">
												<div class="row w-100">

													<?php
														if ($cookiebool == True) {
															foreach($reversevisited as $row) {
																echo "<div class=\"col-12 col-sm-6 col-md-3 px-0\">
																	<img src=\"images/mememan.png\" alt=\"Mike Anamendolla\" class=\"rounded-circle mx-auto d-block img-fluid\">
																</div>" ;
																echo "<div class=\"col-12 col-sm-6 col-md-9 text-center text-sm-left\">
																<label class=\"name lead font-weight-bold\">{$row}</label>
																<br>
															</div>" ;
															}
														}
														else {
															echo "<h3>No past search history." ;
														}

													?>

												</div>
											</li>
										</ul>
										<!--/contacts list-->
									</div>
								</div>
							</div>
						</article>
					</div>

				</div>
			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Want to follow us on social media?</h3>
										</header>
										<p>Check out our links below!</p>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Mason Qian Media. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>
