<!DOCTYPE html>
<html lang="en">

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
            <form action="signupvalues.php" , method="POST">
                <h5>Sign-Up</h5>
                <div class="inputs">
                    <input type="text" placeholder="Name" , name="name">
                    <input type="text" placeholder="Gitam mail" , name="mail">
                    <br>
                    <input type="text" placeholder="Reg no" , name="regno">
                    <input type="text" placeholder="Phone" , name = "phone">
                    <br>
                    <input type="password" placeholder="Password" , name="password">
                </div>
                <br><br><br>
                <button>Login</button>
            </form>
		</div>

	</div>

</body>

</html>