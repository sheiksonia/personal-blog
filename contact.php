<?php
	$hostName="localhost";
	$userName="root";
	$passWord="";
	$dbName="batch1";

	if (isset($_POST["save"])) {

		$name=$_POST["name"];
		$email=$_POST["email"];
		$subject=$_POST["subject"];
		$massage=$_POST["massage"];



		

		$con = new mysqli($hostName,$userName,$passWord,$dbName);
$qr = $con->query("INSERT INTO  employee(name,email,subject,massage)VALUES('$name','$email','$subject','$massage')");
if ($qr) {
		echo " Data saved ";
	}else{
		echo " error ";
	}
	}



?>






<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php contact form</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="background:#C5D394">

<div class="row">
	<div class="col-md-6 offset-md-3">
		<form method="post">
	<div class="form-group">
		<label>User Name</label>
		<input type="text" name="name" class="form-control" id="">
	</div>

	<div class="form-group">
		<label>Email Address</label>
		<input type="email" name="email" class="form-control" id="">
	</div>
	

	<div class="form-group">
		<label>Subject</label>
		<select name="subject" class="form-control">
			<option value="1">-------Select Subject-----</option>
			<option value="1">HTML</option>
			<option value="2">CSS</option>
			<option value="2">BOOTSTRAP</option>
			<option value="2">PHP</option>
			<option value="2">LARAVEL</option>

			
		</select>
		
		
	</div>


	<div class="form-group">
		<label>massages</label>
		<textarea class="form-control" name="massage" required></textarea>
	</div>

	<button name="save" class="form-control btn btn-info mt-3">Save</button>
	
	
</form>

	</div>
</div>