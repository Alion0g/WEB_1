<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Baasha Albido</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark" id="total">
  <a class="main_name navbar-brand" href="index.php">Baasha Albido</a>
    <button class="navbar-toggler mr-4" id="button" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse navbar_options" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" title="HOME" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" title="ABOUT" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" title="SERVICES" href="#servicediv">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" title="SERVICES" href="#gallerydiv">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" title="CONTACT" href="#contactme">Contact</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success search_btn" type="submit">Search</button>
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
      <img src="1.jpg" class="d-block">
      <div class="carousel-caption">
        <h3>Los Angles</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block">
      <div class="carousel-caption">
        <h3>Chicago</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block">
      <div class="carousel-caption">
        <h3>New York</h3>
      </div>
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


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center font-weight-bold">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="2.jpg" class="img-fluid about_img">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>I am Baasha Albido</h2>
        <p class="about_para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
        <a href="about.php" class="btn btn-success">See More</a>
      </div>
    </div>
  </div>
</section>

<section class="my-5" id="servicediv">
  <div class="py-5">
    <h2 class="text-center font-weight-bold">Our Services</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 pb-3">
        <div class="card">
          <img src="3.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Beautiful Nature</h5>
            <p>Some Example Text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 pb-3">
        <div class="card">
          <img src="3.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Beautiful Nature</h5>
            <p>Some Example Text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 pb-3">
        <div class="card">
          <img src="3.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Beautiful Nature</h5>
            <p>Some Example Text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5" id="gallerydiv">
  <div class="py-5">
    <h2 class="text-center font-weight-bold">Gallery</h2>
  </div>
  <div class="div_1">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div>
            <img src="1.jpg" class="img-fluid pb-3">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div>
            <img src="1.jpg" class="img-fluid pb-3">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div>
            <img src="1.jpg" class="img-fluid pb-3">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="div_1">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div>
            <img src="1.jpg" class="img-fluid pb-3">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div>
            <img src="1.jpg" class="img-fluid pb-3">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div>
            <img src="1.jpg" class="img-fluid pb-3">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5" id="contactme">
  <div class="py-5">
    <h2 class="text-center font-weight-bold">Contact us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="name" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Phone/Mobile</label>
        <input type="number" name="phone" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>    
  </div>
</section>

<footer>
  <h6 class="text-center py-4 bg-dark text-white">Copyright by ©Baasha Albido 2021</h6>
</footer>















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>