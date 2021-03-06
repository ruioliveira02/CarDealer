﻿<!DOCTYPE html>
<html>
<head>
    <title>CarDealer</title>

    <meta charset="utf-8">
    <meta name="author" content="Rui Oliveira">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/vehicles.css">
    <link rel="stylesheet" type="text/css" href="css/vehicle_specific.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <script src="js/index.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
    require("car.php");
    $GLOBALS["car"] = getCar($_GET["id"]);
?>

<body onload="showSlides();setSlideCount(<?php echo count($GLOBALS["car"]->images);?>);">
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
    
    <div class="container-fluid">
        <div class="row">
            <div class="col min-width-450 image-div-wrapper">
                <div class="slideshow-container" style="min-height: 500px;">
                    <div class="w3-button slide-button left-button" onclick="changeSlide(-1);"><span class="arrows">&#10094;</span></div>
                    <div class="w3-button slide-button right-button" onclick="changeSlide(1);"><span class="arrows">&#10095;</span></div>

                    <?php
                    for($i = 1; $i <= count($GLOBALS["car"]->images); $i++)
                    {
                    	echo '<div class="mySlides">
                    	<div class="numbertext">' . $i . ' / ' . count($GLOBALS["car"]->images) . '</div>
                    	<img src="' . $GLOBALS["car"]->images[$i - 1] . '" style="width:100%">
                    	</div>';
                    }
                    ?>

                    

                    <!--div class="mySlides">
                        <div class="numbertext">2 / 3</div>
                        <img src="img/bmw2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 3</div>
                        <img src="img/bmw3.jpg" style="width:100%">
                    </div-->
                </div>
                <br>


                <!--div class="text-center lower-buttons">
                    <span class="dot" onclick="changeToSlide(0);"></span>
                    <span class="dot" onclick="changeToSlide(1);"></span>
                    <span class="dot" onclick="changeToSlide(2);"></span>
                </div-->
            </div>
            <div class="col min-width-450" style="height: 500px; margin-top: 30px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="title"><?php echo $GLOBALS["car"]->name; ?></h1>
                        </div>
                        <div class="col-4">
                            <h2 style="line-height:4rem;"><?php echo $GLOBALS["car"]->price; ?>€</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <i class="fa fa-road other-info"></i><span class="other-info"><?php echo $GLOBALS["car"]->mileage; ?> miles</span>
                        </div>
                        <div class="col">
                            <i class="fas fa-gas-pump other-info"></i><span class="other-info"><?php echo ucfirst($GLOBALS["car"]->fuel); ?></span>
                        </div>
                    </div>

                </div>

                <div class="container-fluid" style="margin-top: 15px;">
                    <div class="row">
                        <div class="col">
                            <span class="topic">Engine:</span>
                            <span><?php echo $GLOBALS["car"]->engine; ?></span>
                        </div>
                        <div class="col">
                            <span class="topic">CO2 emissions:</span>
                            <span><?php echo $GLOBALS["car"]->co2; ?> g/Km</span>
                        </div>
                    </div>
                    <div class="row information-row">
                        <div class="col">
                            <span class="topic">Power:</span>
                            <span><?php echo $GLOBALS["car"]->power; ?> bhp</span>
                        </div>
                        <div class="col">
                            <span class="topic">Drive:</span>
                            <span><?php echo $GLOBALS["car"]->drive; ?></span>
                        </div>
                    </div>
                    <div class="row information-row">
                        <div class="col">
                            <span class="topic">Peak Torque:</span>
                            <span><?php echo $GLOBALS["car"]->torque; ?></span>
                        </div>
                        <div class="col">
                            <span class="topic">Consumption (advertised):</span>
                            <span><?php echo $GLOBALS["car"]->consumption; ?> mpg</span>
                        </div>
                    </div>
                    <div class="row information-row">
                        <div class="col">
                            <span class="topic">Gearbox:</span>
                            <span><?php echo $GLOBALS["car"]->gearbox; ?></span>
                        </div>
                        <div class="col">
                            <span class="topic">Weight:</span>
                            <span><?php echo $GLOBALS["car"]->weight; ?> Kg</span>
                        </div>
                    </div>
                    <div class="row information-row">
                        <div class="col">
                            <span class="topic">0-60 mph:</span>
                            <span><?php echo $GLOBALS["car"]->acceleration; ?>s</span>
                        </div>
                        <div class="col">
                            <span class="topic">Number of doors:</span>
                            <span><?php echo $GLOBALS["car"]->doors; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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