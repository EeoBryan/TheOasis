<?php $this->load->helper('html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Oasis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('/user_guide/_static/css/style.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('/user_guide/_static/js/home_script.js'); ?>"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Oasis</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#band">BAND</a></li>
            <li><a href="#tour">TOUR</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Merchandise</a></li>
                <li><a href="#">Extras</a></li>
                <li><a href="#">Media</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <?php echo img(array('src'=>'/user_guide/_images/p7.jpg', 'alt'=> 'p7', 'width'=>'100%', 'height'=>'100%')); ?>
      </div>
      <div class="carousel-caption">
        <h3 id="welcome-title">Welcome to Oasis</h3>
        <button type="button" id="about-btn" class="w3-button w3-border w3-hover-red" data-toggle="collapse" data-target="#demo"> What is Oasis </button>
         <div id="demo" class="collapse">
             <ul style="list-style-type:none;">
                 <li>Want to know more about us?</li>
             </ul>
         </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container text-center">
  <h3>Our Activities</h3>
  <p><em>We love music!</em></p>
  <p>We have created a fictional band website. Lorem ipsum..</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p><strong>Follow us On</strong></p><br>
      <a href="#">Facebook</a>
    </div>
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name">
    </div>
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name">
    </div>
  </div>
</div>

<!-- footer -->
<div class="container text-center">
  <h3>More About Us</h3>
  <p><em>We love music!</em></p>
  <p>We have created a fictional band website. Lorem ipsum..</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p><strong>Follow us On</strong></p><br>
      <a href="#">Facebook</a>
    </div>
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name">
    </div>
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name">
    </div>
  </div>
</div>

</body>
</html>
