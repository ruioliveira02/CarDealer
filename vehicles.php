﻿<!DOCTYPE html>
<html>
<head>
	<title>CarDealer</title>

	<meta charset="utf-8">
	<meta name="author" content="Rui Oliveira">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/vehicles.css">
	<link rel="stylesheet" type="text/css" href="css/search.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand text-success" href="https://ruioliveira02.github.io/CarDealer">CarDealer</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse h-100" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-secondary" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">Vehicles</a>
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
					<a class="nav-link text-light" href="https://ruioliveira02.github.io/CarDealer/contact us.html">Contact Us</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="cars-wrapper">
		<h1 class="title">Our Fleet</h1>
	</div>

	<section>
		<div class="cars-wrapper">
			<button class="visible-s filters" data-toggle="collapse" data-target="#SearchParameters">
				<i class='fas fa-filter'></i>Filters
			</button>

			<div class="hidden-s collapse SearchParameters" id="SearchParameters">
				<form id="search" method="get">					
					<div class="row margin-bottom-20">
						<div class="col">
							<label for="make">Make:</label>
							<br>
							<select id="make" name="make" autocomplete="off">
								<?php
								$selected = ["", "", "", ""];
								if(isset($_GET["make"]))
								{
									$index = 0;
									$make = $_GET["make"];
									if($make == "Saab")
										$index = 1;
									else if($make == "fiat")
										$index = 2;
									else if($make == "Audi")
										$index = 3;

									$selected[$index] = ' selected';
								}
								echo '<option value="volvo"' . $selected[0] . '>Any</option>
								<option value="saab"' . $selected[1] . '>Saab</option>
								<option value="fiat"' . $selected[2] . '>Fiat</option>
								<option value="audi"' . $selected[3] . '>Audi</option>'
								?>
							</select>
						</div>

						<div class="col">
							<label for="model">Style:</label>
							<br>
							<select id="model" name="model" autocomplete="off">
								<?php
								$selected = ["", "", "", ""];
								if(isset($_GET["model"]))
								{
									$index = 0;
									$model = $_GET["model"];
									if($model == "coupe")
										$index = 1;
									else if($model == "sedan")
										$index = 2;
									else if($model == "sport")
										$index = 3;

									$selected[$index] = ' selected';
								}
								echo '<option value="any"' . $selected[0] . '>Any</option>
								<option value="coupe"' . $selected[1] . '>Coupe</option>
								<option value="sedan"' . $selected[2] . '>Sedan</option>
								<option value="sport"' . $selected[3] . '>Sport</option>'
								?>
							</select>
						</div>

						<div class="col">
							<label for="engine">Engine:</label>
							<br>
							<select id="engine" name="engine">
								<?php
								$selected = ["", "", "", "", ""];
								if(isset($_GET["engine"]))
								{
									$index = 0;
									$engine = $_GET["engine"];
									if($engine == "petrol")
										$index = 1;
									else if($engine == "diesel")
										$index = 2;
									else if($engine == "hybrid")
										$index = 3;
									else if($engine == "electric")
										$index = 4;

									$selected[$index] = ' selected';
								}
								echo '<option value="any"'. $selected[0] .'>Any</option>
								<option value="petrol"'. $selected[1] .'>Petrol</option>
								<option value="diesel"'. $selected[2] .'>Diesel</option>
								<option value="hybrid"'. $selected[3] .'>Hybrid</option>
								<option value="electric"'. $selected[4] .'>Electric</option>'
								?>		
							</select>
						</div>
					</div>

					<div class="row margin-bottom-20">
						<div class="col">
							<label for="min_price">Price (min):</label>
							<br>
							<?php
							$val = "";
							if(isset($_GET["min_price"]))
								$val = $_GET["min_price"];
							echo '<input min="0" id="min_price" name="min_price" type="number" value="' . $val .'">';
							?>
							
						</div>

						<div class="col">
							<label for="max_price">Price (max):</label>
							<br>
							<?php
							$val = "";
							if(isset($_GET["max_price"]))
								$val = $_GET["max_price"];
							echo '<input min="0" id="max_price" name="max_price" type="number" value="' . $val .'">';
							?>
						</div>

						<div class="col">
							<label for="min_year">Year (min):</label>
							<br>
							<?php
							$val = "";
							if(isset($_GET["min_year"]))
								$val = $_GET["min_year"];
							echo '<input min="0" id="min_year" name="min_year" type="number" value="' . $val .'">';
							?>
						</div>

						<div class="col">
							<label for="max_year">Year (max):</label>
							<br>
							<?php
							$val = "";
							if(isset($_GET["max_year"]))
								$val = $_GET["max_year"];
							echo '<input min="0" id="max_year" name="max_year" type="number" value="' . $val .'">';
							?>
						</div>
					</div>


					<div class="row margin-bottom-20">
						<div class="col">
							<label for="min_mileage">Mileage (min):</label>
							<br>
							<?php
							$val = "";
							if(isset($_GET["min_mileage"]))
								$val = $_GET["min_mileage"];
							echo '<input min="0" id="min_mileage" name="min_mileage" type="number" value="' . $val .'">';
							?>
						</div>

						<div class="col">
							<label for="max_mileage">Mileage (max):</label>
							<br>
							<?php
							$val = "";
							if(isset($_GET["max_mileage"]))
								$val = $_GET["max_mileage"];
							echo '<input min="0" id="max_mileage" name="max_mileage" type="number" value="' . $val .'">';
							?>
						</div>

						<div class="col-6 text-center d-flex min-height-54">
							<input class="btn btn-success align-self-end" type="submit" value="Search">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

		<section>
			<div class="cars-wrapper">
				<?php
				require('car.php');
				$vehicles = getAllCars($_GET);
				$GLOBALS["size"] = count($vehicles);
				//var_dump($vehicles);
				$page = 1;

				if(isset($_GET["page"]))
					$page = $_GET["page"];

				$GLOBALS["page"] = $page;
				$totalCars = $GLOBALS["size"];

				$startCar = ($page - 1) * 12;
				$endCar = $startCar + 11;

				if($endCar >= $totalCars)
					$endCar = $totalCars - 1;

				for($i = $startCar; $i <= $endCar; $i++)
				{
					echo '<div class="row">';

					for($i; $i <= $endCar; $i++)
					{
						echo '<div class="col mt-30">
						<img src="' . $vehicles[$i]->img . '" />
						<h2 class="car-name">' . $vehicles[$i]->name . '</h2>
						<h3 class="price">' . $vehicles[$i]->price . '€</h3>
						<div class="row">
						<div class="col">
						<i class="fa fa-road other-info"></i><span class="other-info">' . $vehicles[$i]->mileage . ' miles</span>
						</div>
						<div class="col">
						<i class="fas fa-gas-pump other-info"></i><span class="other-info">' . ucfirst($vehicles[$i]->fuel) . '</span>
						</div>
						</div>

						<div class="button">
						<a href="https://localhost/CarDealer/vehicle_specific.php?id=' . $vehicles[$i]->id . '" class="link-wrapper">More info</a>
						</div>
						</div>';
					}
					echo '</div>';
				}
				?>
			</div>
		</section>

		<section class="mt-30 mb-30">
			<center>
				<div class="container text-center" style="width: auto; display: table-cell;">
					<div class="row">
						<!--div class="col">
							<a class="arrow-wrapper" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">
								<span class="fas arrow">&#xf359</span>
							</a>
						</div>
						<div class="col page-menu">
							<a class="arrow-wrapper" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">
								<span class="selected fas">1</span>
							</a>
						</div-->
						<?php
						$noPages = $GLOBALS["size"] / 12;
						$currentPage = $GLOBALS["page"];

						if($noPages >= 5)
						{
							if($currentPage <= 2)
							{
								for($i = 1; $i <= 3; $i++)
								{
									$class = "selector";

									if($i == $currentPage)
										$class = "selected";

									echo '<div class="col page-menu">
									<input type="submit" form="search" class="arrow-wrapper ' . $class . '" name="page" value="'. ($i) . '">
									</div>';
								}

								echo '<div class="col page-menu">
								<span class="fas arrow" style="color: black;">...</span>
								</div>';
								echo '<div class="col page-menu">
								<input type="submit" form="search" class="arrow-wrapper selector" name="page" value="'. $noPages . '">
								</div>';
							}
							else if($currentPage >= $noPages - 2)
							{
								echo '<div class="col page-menu">
								<input type="submit" form="search" class="arrow-wrapper selector" name="page" value="1">
								</div>';
								echo '<div class="col page-menu">
								<span class="fas arrow" style="color: black;">...</span>
								</div>';
								
								for($i = $noPages - 3; 	$i <= $noPages; $i++)
								{
									$class = "selector";

									if($i == $currentPage)
										$class = "selected";

									echo '<div class="col page-menu">
									<input type="submit" form="search" class="arrow-wrapper ' . $class . '" name="page" value="'. ($i) . '">
									</div>';
								}
							}
							else
							{
								echo '<div class="col page-menu">
								<input type="submit" form="search" class="arrow-wrapper selector" name="page" value="1">
								</div>';
								echo '<div class="col page-menu">
								<span class="fas arrow" style="color: black;">...</span>
								</div>';

								for($i = $currentPage - 1; $i <= $currentPage + 1; $i++)
								{
									$class = "selector";

									if($i == $currentPage)
										$class = "selected";

									echo '<div class="col page-menu">
									<input type="submit" form="search" class="arrow-wrapper ' . $class . '" name="page" value="'. ($i) . '">
									</div>';
								}

								echo '<div class="col page-menu">
								<span class="fas arrow" style="color: black;">...</span>
								</div>';
								echo '<div class="col page-menu">
								<input type="submit" form="search" class="arrow-wrapper selector" name="page" value="'. $noPages . '">
								</div>';
							}
						}
						else
						{
							for($i = 0; $i <= $noPages; $i++)
							{
								$class = "selector";

								if($i == $currentPage - 1)
									$class = "selected";

								echo '<div class="col page-menu">
										<input type="submit" form="search" class="arrow-wrapper ' . $class . '" name="page" value="'. ($i + 1) . '">
							</div>';
							}
						}
						/*if($noPages >= 1)
						{
							echo '<div class="col page-menu">
							<a class="arrow-wrapper" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">
							<span class="fas selector">2</span>
							</a>
							</div>';
						}

						if($noPages >= 2)
						{
							echo '<div class="col page-menu">
							<a class="arrow-wrapper" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">
							<span class="fas selector">3</span>
							</a>
							</div>';
						}

						if($noPages > 3)
						{
							echo '<div class="col page-menu">
							<span class="fas arrow" style="color: black;">...</span>
						</div>';
						}

						if($noPages >= 3)
						{
							echo '<div class="col page-menu">
							<a class="arrow-wrapper" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">
								<span class="fas selector">' . ($noPages + 1) . '</span>
							</a>
						</div>';
						}*/
						?>
						
						<!--div class="col page-menu">
							<a class="arrow-wrapper" href="https://ruioliveira02.github.io/CarDealer/vehicles.html">
								<input type="submit" form="searchParameters" name="page" value="2" class="fas arrow">&#xf35a</span>
							</a>
						</div-->
					</div>
				</div>
			</center>

		</section>

		<footer class="page-footer font-small bg-dark text-light pt-4 mt-10">
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

			<div class="footer-copyright text-center py-3">
				©
				<script>document.write(new Date().getFullYear());</script> Copyright
				<a class="text-light" href="#"> Rui Oliveira</a>
			</div>
		</footer>
</body>
</html>