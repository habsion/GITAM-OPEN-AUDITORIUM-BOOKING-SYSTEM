<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
 ?>

<head>
	<meta charset="UTF-8">
	<title>Gitam Login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Gitam</h1>
				<h1>open - </h1>
				<h1>Auditorium</h1>
				<h1></h1>
				<p id="tagline">Grab your passes now!!!</p>
				
			</div>
		</div>


		<div class="right">
			<h5>Login</h5>
			<p>Don't have an account? <a href="signup.php">Create Your Account</a> it takes less than a minute</p>
			<form action="loginvalues.php" method="POST">
				<div class="inputs">
					<input type="text" placeholder="Gitam mail" name="mail">
					<br>
					<input type="password" placeholder="Password" name="password">
				</div>

				<br><br>
				<br>
				<button>Login</button>
				<center>
					<p style="color:red;">
					<?php
						if(isset($_GET['password_error'])){
						echo $_GET['password_error'];
						}    
					
					?>
					</p>
				</center>
			</form>
		</div>

	</div>
</body>

</html>