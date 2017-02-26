<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Join Us - Stork</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<link rel="stylesheet" href="assets/css/joinUs.css" />
</head>

<body>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<h1><a href="index.html">Stork</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="aboutUs.html">About Us</a></li>
								<li><a href="joinUs.php">Join Us</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<article id="main">
			<header>
				<div class="inner">
					<h2 style="color:#F7921E">Become A Stork</h2>
					<p>Sign up below to become a member</br> of Stork!</p>

				</div>
			</header>
			<section class="wrapper style5" id="jumptocenter">
				<div class="inner">
					<div class="container">
						<h2>Sign Up!</h2>
							<form method="post" action="#">
										<div class="row uniform">
											<div class="12u$">
												<input type="text" name="first-name" id="first-name" value="" placeholder="First Name" />
											</div>
											<div class="12u$">
												<input type="text" name="last-name" id="last-name" value="" placeholder="Last Name" />
											</div>
											<div class="12u$">
												<input type="text" name="username" id="username" value="" placeholder="Username" />
											</div>
											<div class="12u$">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											<div class="12u$">
												<input type="text" name="address" id="address" value="" placeholder="Street Address" />
											</div>
											<div class="12u$">
												<input type="text" name="city" id="city" value="" placeholder="City" />
											</div>
											<div class="6u 12u$(xsmall)">
												<input type="text" name="state" id="state" value="" placeholder="State" />
											</div>
											<div class="6u 12u$(xsmall)">
												<input type="text" name="zip-code" id="zip-code" value="" placeholder="Zip Code" />
											</div>
											<div class="12u$">
												<input type="checkbox" id="agreement" name="agreement">
												<label for="agreement">I agree to the terms and services.</label>
											</div>
											<div  class="12u$">
												<input style="display: block; margin: auto" type="submit" value="Sign Up!" class="special" />
											</div>
										</div>
							</form>

					</div>
				</div>
			</section>
		</article>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = mysql_real_escape_string($_POST['username']);
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$password = mysql_real_escape_string($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);
	$city = mysql_real_escape_string($_POST['city']);
	$state = mysql_real_escape_string($_POST['state']);
	$zipcode = mysql_real_escape_string($_POST['zipcode']);
    $bool = true;
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("FirstDataBase") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from users"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("joinUs.php");</script>'; // redirects to joinUs.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO userinfo (firstname,lastname,username,password,email,city,state,zipcode) VALUES ('$firstname','$lastname','$username','$password',$email,$city,$state,$zipcode)"); //Inserts the value to table users
		Print '<script>alert("Successfully joined!");</script>'; // Prompts the user
		Print '<script>window.location.assign("joinUs.php");</script>'; // redirects to joinUs.php
	}
}
?>

		​
		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; Untitled</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>

</html>