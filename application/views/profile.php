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
<h1> Profile Page: </h1>

<?php if(isset($_SESSION['success'])){ ?>
	<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div> 
<?php
} ?>
	Hello, <?php echo $_SESSION['username']; ?>
<br><br>
<a href="<?php echo base_url(); ?>auth/logout">Logout</a>

	
<script src= "https://ajax.googlepis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>

<script src=" <?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>