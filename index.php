<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Onco — Home Page</title>
</head>

<body>
<section class="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Onco Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <button type="button" class="nav-link btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;SIGN UP&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </li>
                <li class="nav-item active">
                    <button type="button" class="nav-link btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;SIGN IN&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </li>
            </ul>
        </div>
    </nav>
</section>


<section class="banner">
    <div id="left_banner" class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="banner-title">YOUR COLLEGEMATE</p>
                <p class="banner-subheading">EK BHOT HE GAZAB LINE DALNEGE, PDHKE MAZZA HE AA JAYEGA BHAI!</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="resources/img/banner.png" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<section class="banner-svg">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,96L48,85.3C96,75,192,53,288,74.7C384,96,480,160,576,181.3C672,203,768,181,864,154.7C960,128,1056,96,1152,106.7C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>

<div class="container demo">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <h1 class="main-title"><span class="thin">Explore</span> Space</h1>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>