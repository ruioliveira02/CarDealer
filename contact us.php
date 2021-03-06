<!DOCTYPE html>
<html>
<head>
	<title>CarDealer</title>

	<meta charset="utf-8">
	<meta name="author" content="Rui Oliveira">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/contact us.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function send_mail() {
		error_reporting(0); //For local testing purposes only
		if(!isset($_POST) || empty($_POST))
			return "";

		if(!(isset($_POST["name"]) && isset($_POST["subject"]) && isset($_POST["e-mail"]) && isset($_POST["content"])))
			return '<p class="message" style="color: red;">Please fill in all the fields.</p>';

		$name = htmlspecialchars_decode($_POST["name"]);
		$subject = htmlspecialchars_decode($_POST["subject"]);
		$email = htmlspecialchars_decode($_POST["e-mail"]);
		$content = htmlspecialchars_decode($_POST["content"]);

		$message = htmlspecialchars_decode($name . "sent a message. E-mail address: " . $email . "\n" . "Subject: " . $subject . "\n" . $content);

		$result = mail("general@cardealer.comm", $subject, $message);

		if($result) {
			return '<p class="message">Your message has been sent successfully.</p>';
		}
		else {
			return '<p class="message" style="color: red;">Your message could not be sent. Please try again later.</p>';
		}
	}
	?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand text-success" href="https://ruioliveira02.github.io/CarDealer">CarDealer</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse h-100" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-light" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">Vehicles</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link text-light dropdown-toggle h-100" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Services
					</a>
					<!--Border has been added in order to fill white space between the end of navbar and the beginning of the dropdown-->
					<div class="dropdown-menu bg-dark mt-0 border-top border-dark rounded-0" aria-labelledby="navbarDropdown" style="">
						<a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#insurance">Insurance</a>
                        <a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#financing">Financing</a>
                        <a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#warranty">Warranty</a>
                        <a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#workshop">Workshop</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						More Info
					</a>
					<!--Border has been added in order to fill white space between the end of navbar and the beginning of the dropdown-->
					<div class="dropdown-menu bg-dark mt-0 border-top border-dark rounded-0" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/about us.html">About us</a>
						<a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/team.html">Our Team</a>
						<a class="dropdown-item text-light" href="https://ruioliveira02.github.io/CarDealer/corporate.html">Corporate</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="https://ruioliveira02.github.io/CarDealer/sell.html">Sell your car</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-secondary" href="#">Contact Us</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container-fluid main-page">
		<div class="row">
			<div class="col min-width-400">
				<h1 class="title">We would love to hear from you</h1>

				<div class="row">
					<div class="col">
						<i class="fas fa-envelope-open"> </i>
						<span>E-mail</span>
						<br>
						<a class="text-success contact-links" href="mailto:general@cardealer.comm">general@cardealer.comm</a>
					</div>

					<div class="col">
						<i class="fas fa-phone-alt"> </i>
						<span>Phone</span>
						<br>
						<a class="text-success contact-links" href="tel:000123456789">000123456789</a>
					</div>
				</div>
				
				<!--p class="message">Your e-mail has successfully been sent.</p-->

				<?php
					echo send_mail();
				?>

				<p class="text">If you have any questions, feel free to fill this form in and we will get back to you as soon as possible</p>
				<form method="post">
					<input class="text-inputs" type="text" name="name" placeholder="Name" required>
					<br>
					<input class="text-inputs" type="text" name="subject" placeholder="Subject" required>
					<br>
					<input class="text-inputs" type="email" name="e-mail" placeholder="E-mail address" required>
					<br>
					<textarea class="content" name="content" placeholder="Content" required></textarea>
					<br>
					<input class="btn btn-success submit-button" type="submit" value="Send">
				</form>
			</div>

			<div class="col  min-width-400 text-center iframe-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15022.44227440797!2d-8.383815755536563!3d41.55134211799012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24fc15810695eb%3A0xd4533b77013025a7!2sBom%20Jesus%20do%20Monte%2C%20Braga!5e1!3m2!1spt-PT!2spt!4v1598979698400!5m2!1spt-PT!2spt" width="80%" height="600" frameborder="0" style="border:0; margin-bottom: 20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>

	<footer class="page-footer font-small bg-dark text-light pt-4">
		<div class="container text-center text-md-left">
			<div class="row">
				<div class="col-md-4 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">CarDealer</h5>
					<p>Founded in 1992, CarDealer is a second-hand car showroom. Nowadays, it features one of biggest selections in the country.</p>
				</div>

				<hr class="clearfix w-100 d-md-none">

				<div class="col-md-2 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">More info</h5>

					<ul class="list-unstyled">
						<li>
							<a class="text-light" href="https://ruioliveira02.github.io/CarDealer/about us.html">About us</a>
						</li>
						<li>
							<a class="text-light" href="https://ruioliveira02.github.io/CarDealer/team.html">Our Team</a>
						</li>
						<li>
							<a class="text-light" href="https://ruioliveira02.github.io/CarDealer/corporate.html">Corporate</a>
						</li>
					</ul>
				</div>

				<hr class="clearfix w-100 d-md-none">

				<div class="col-md-2 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Services</h5>

					<ul class="list-unstyled">
                        <li>
                            <a class="text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#insurance">Insurance</a>
                        </li>
                        <li>
                            <a class="text-light" href="https://ruioliveira02.github.io/CarDealer/services.htmlfinancing">Financing</a>
                        </li>
                        <li>
                            <a class="text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#warranty">Warranty</a>
                        </li>
                        <li>
                            <a class="text-light" href="https://ruioliveira02.github.io/CarDealer/services.html#workshop">Workshop</a>
                        </li>
                    </ul>
				</div>

				<hr class="clearfix w-100 d-md-none">

				<div class="col-md-2 mx-auto">
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Other</h5>

					<ul class="list-unstyled">
						<li>
							<a class="text-light" href="https://ruioliveira02.github.io/CarDealer/contact us.html">Contact us</a>
						</li>
						<li>
							<a class="text-light" href="#!">Privacy Policy</a>
						</li>
						<li>
							<a class="text-light" href="#!">Electronic Complaints Book</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<hr>

		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a class="btn-floating btn-fb mx-1 text-light">
					<i class="fab fa-facebook-f"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1 text-light">
					<i class="fab fa-twitter"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-gplus mx-1 text-light">
					<i class="fab fa-google-plus-g"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-li mx-1 text-light">
					<i class="fab fa-linkedin-in"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1 text-light">
					<i class="fab fa-dribbble"> </i>
				</a>
			</li>
		</ul>

		<div class="footer-copyright text-center py-3">©
			<script>document.write(new Date().getFullYear());</script> Copyright
			<a class="text-light" href="#"> Rui Oliveira</a>
		</div>
	</footer>
</body>
</html>