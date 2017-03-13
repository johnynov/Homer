<!DOCTYPE html>

<?php

$dbconn = pg_connect ("host=localhost dbname=Homer user=postgres 
password=postgres")
	or die('Nie można nawiązać połączenia');
?>

<html lang = "pl">

	<head>
		<title>Home.r :: login</title>
		<link href="styles.css" type=text/css rel=stylesheet />
		<link href="table.css" type=text/css rel=stylesheet />
		<link rel="stylesheet" type="text/css" href="toggle2.css">

		<style>
			body {
				padding-top: 50px;
				padding-bottom: 20px;
				background-image: url("tata.jpg");
			}

			.form-signin {
				max-width: 240px;
				padding: 1px;
				margin: 0 auto;
				color: #017572;
			}

			.form-signin .form-signin-heading,
			.form-signin .checkbox {
				margin-bottom: 10px;
			}

			.form-signin .checkbox {
				font-weight: normal;
			}

			.form-signin .form-control {
				position: relative;
				height: auto;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				padding: 10px;
				font-size: 16px;
			}

			.form-signin .form-control:focus {
				z-index: 2;
			}

			.form-signin input[type="email"] {
				margin-bottom: -1px;
				border-bottom-right-radius: 0;
				border-bottom-left-radius: 0;
				border-color:#017572;
			}

			.form-signin input[type="password"] {
				margin-bottom: 10px;
				border-top-left-radius: 0;
				border-top-right-radius: 0;
				border-color:#017572;
			}

			@font-face {
				font-family: 'Myfont';
				src: url('Bang.ttf') format('ttf'); /* */
			}

			h2{
				text-align: center;
				color: #d50000;
				font-family: 'Myfont',sans-serif;
				font-size: 190%;
			}

			h3{
				text-align: center;
				color: #1a237e;
			}


			}

		</style>

	</head>

	<body>
		<h2 style="font-family:verdana;"><img src="Homerv8.png" alt="Avatar" class="avatar" height="130px" width="130px"></h2>

		<!-- <h3 style="font-family:verdana;">Automatyzacja Riveiry</h3> -->

		<div class = "container form-signin">

		</div> 

		<div class = "container">

			<form class = "form-signin" role = "form" 
				  action = "login.php" method = "post" accept-charset='UTF-8'>
				<input type = "text" class = "form-control" 
					   name = "username" placeholder = "User / Admin"
					   required autofocus>
				</br>
			</br>
		<input type = "password" class = "form-control"
			   name = "password" placeholder = "Pass" required>
		<button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>

		</div>

	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
		<fieldset >
			<legend>Login</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<label for='username' >UserName*:</label>
			<input type='text' name='username' id='username'  maxlength="50" />
			<label for='password' >Password*:</label>
			<input type='password' name='password' id='password' maxlength="50" />
			<input type='submit' name='Submit' value='Submit' />
		</fieldset>
	</form>

	<!-- Czyszczenie sesji 
<h5 style="font-family:verdana;">Click here to clean <a href = "logout.html" tite = "Logout"> Session. </h5>

<h5 style="font-family:verdana;">Click here to clean Session. </h5>
-->

	</body>
</html>