<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset= "utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name= "viewport" content="width=device-width, initial-scale=1">
	
	<title> Login Page </title>
	
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>

</head>
<body>
<div class="col-lg-5 col-lg-offset-2">

<h1> Login Page: </h1>

<p>Fill in the details to Login on our website! </p>
<?php if(isset($_SESSION['success'])){ ?>
	<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div> 
<?php
} ?>
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

<form action="" method="POST">
<div class= "col-lg-8 col-lg-offset-2">
	<div class="form-group">
		<label for="username" >Username:</label>
		<input class="form-control" name="username" id="username" type="text">
	</div>
	
	<div class="form-group">
		<label for="password" >Password:</label>
		<input class="form-control" name="password" id="password" type="password">
	</div>
	<div>
		<button class="btn btn-primary" name="login">Login</button>
</form>
	</div>
	
<script src= "https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>

<script src=" <?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>