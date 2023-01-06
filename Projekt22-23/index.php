<?php
    session_start();
    include 'about.php';
    include ("functions.php");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "projekt22-23";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$user_data = check_login($con);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Terem Foglalas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Terem Foglalas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategoriak
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#Kicsi">1-49 szemely</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#kozepes">50-100 szemely</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#nagy">Tobb mint 100 szemely</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#foglalas">Foglalas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Kijelentkezes</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/carousel1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


<a id="Kicsi">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Kicsi(1-49)</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/kicsi1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/kicsi2.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/kicsi3.jpg" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>
</a>

<a id="kozepes">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Közepes(50-100)</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/kozep1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/kozep2.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/kozep3.jpg" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>
</a>

<a id="nagy">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nagy (100+)</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nagy1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nagy2.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nagy3.jpg" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>
</a>

<a id="foglalas">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Foglalas</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Nev:</label>
                <input type="text" name="nev" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Terem:</label>
                <input type="text" name="terem" class="form-control">
            </div>
            <div class="form-group">
                <label>Foglalas idopontja:</label>
                <input type="text" name="foglalas" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Elkuld</button>
        </form>
    </div>
</section>

</a>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
