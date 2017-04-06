<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php session_start(); ?>
<html>

<head>
	<title>Sign in - Stork</title>
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
			<h1><a href="index.php">Stork</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="aboutUs.html">About Us</a></li>
								<li><a href="joinUs.php#jumptocenter" style="color: #F7921E">Join Us</a></li>
								<li><a href="signIn.php#jumptocenter">Sign In</a></li>
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
					<h2 style="color:#F7921E">Welcome Back Stork</h2>
					<p>Sign in below </br> </p>

				</div>
			</header>
			<section class="wrapper style5" id="jumptocenter">
				<div class="inner">
					<div class="container">
						<h2>Sign In
						
						</h2>

						
							<form method="post" action="signIn.php">
										<div class="row uniform">
											<div class="12u$">
												<b>Username</b>
										        <input type="text" name="username" id="username" required="true" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" />
											</div>
											<div class="12u$" style="padding-top: 0;">
												<b>Password</b>
												<input style="-moz-appearance: none;
															-webkit-appearance: none;
															-ms-appearance: none;
															appearance: none;
															border-radius: 3px;
															font-size: 1.0rem;
															border: none;
															color: inherit;
															display: block;
															outline: 0;
															padding: 0 1em;
															text-decoration: none;
															height: 44px;
															box-shadow: none;
															width: 100%;" type="password" name="password" id="password" required="true" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" />
											</div>

											<div  class="12u$">
												<input style="display: block; margin: auto" type="submit" value="Sign In Now!" class="special" />
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
	$password = mysql_real_escape_string($_POST['password']);
	
	//Create session variables
	// $_SESSION["username"] = $username;
	// $_SESSION["password"] = $password;
	$bool = true;
    $_SESSION['signInStatus']=0;
	mysql_connect("localhost", "root") or die(mysql_error()); //Connect to server
	mysql_select_db("FirstDataBase") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from userinfo"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		$table_password = $row['password'];
		if($username == $table_users && $table_password==$password) // checks if there are any matching fields
		{
			$_SESSION['email'] = $row['email'];
			
			$_SESSION['signInStatus']=1; // sets bool to false
			break; //Prompts the user
			//Print '<script>window.location.assign("joinUs.php");</script>'; // redirects to joinUs.php
		}
	}
	if($_SESSION['signInStatus']==1) // checks if bool is true
	{
		$_SESSION['username'] = $username;

					//header('Location: homepage.php');
		//Print '<script>alert("Successfully joined!");</script>'; // Prompts the user
		// echo '<script type="text/javascript">window.location.href="Receipt.php";</script>';die();
		Print '<script>window.location.assign("storkRequests.php");</script>'; // redirects to joinUs.php			
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
				<li>&copy; Stork</li>
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