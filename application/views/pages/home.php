<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>The Oasis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('/user_guide/_static/css/style.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Oasis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"> Contact Us </a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login </a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1 id="welcome-title"> Welcome to The Oasis </h1>

    <button type="button" id="about-btn" class="w3-button w3-border w3-hover-red" data-toggle="collapse" data-target="#demo"> What is Oasis </button>
     <div id="demo" class="collapse">
         <ul style="list-style-type:none;">
             <li>Oasis</li>

         </ul>
     </div>
</div>

<div class="carousel-container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <?php echo img(array('src'=>'/user_guide/_images/p1.jpg', 'alt'=> 'p1', 'width'=>'1200px', 'height'=>'600px')); ?>
      </div>

      <div class="item">
          <?php echo img(array('src'=>'/user_guide/_images/p2.jpg', 'alt'=> 'p2', 'width'=>'1200px', 'height'=>'600px')); ?>
      </div>

      <div class="item">
          <?php echo img(array('src'=>'/user_guide/_images/p3.jpg', 'alt'=> 'p3', 'width'=>'1200px', 'height'=>'600px')); ?>
      </div>
    </div>

  </div>
</div>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div id="events-block" class="col-sm-8">
        <h2>Events</h2>

        <!-- yf = Youth Fellowship -->
        <div id="yf" class="">
            <h4>Youth Fellowship</h4>
            <h5> Activity: </h5>
            <h5> Venue: </h5>
            <h5> Time: </h5>
            <h5> Person In Charge: </h5>
        </div>

        <!-- cf = College Fellowship -->
        <div id="cf" class="">
            <h4>College Fellowship</h4>
            <h5> Activity: </h5>
            <h5> Venue: </h5>
            <h5> Time: </h5>
            <h5> Person In Charge: </h5>
        </div>

        <!-- ya = Young Adults -->
        <div id="ya" class="">
            <h4>Young Adults</h4>
            <h5> Activity: </h5>
            <h5> Venue: </h5>
            <h5> Time: </h5>
            <h5> Person In Charge: </h5>
        </div>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <div id="social-media-accounts">
        <h4> Follow us </h4>
        <ul style="list-style-type:none;">
            <li>
                <a href="https://www.facebook.com/The-Oasis-183512322164689/?epa=SEARCH_BOX">Facebook</a>
            </li>
        </ul>

    </div>
</div>

</body>
</html>
