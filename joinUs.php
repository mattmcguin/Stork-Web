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
								<li><a href="joinUs.php#jumptocenter" style="color: #F7921E">Join Us</a></li>
                            <!--    <li><a href="request.html">Make a Request</a></li>
								<li><a href="Available Requests.html">Available Requests</a></li>
								<li><a href="My Requests.html">My Requests</a></li>
								<li><a href="My Stork Quests.html">My Stork Quests</a></li> -->
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
						<h2>Sign Up!<a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
									<img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_now_accepting_pp_2line_w.png" align="right" border="0" alt="Now Accepting PayPal">
									</a>
									<!--<a href="https://www.paypal.com/webapps/mpp/how-paypal-works">
									<font size="1" face="Arial" color="#0079CD">How PayPal Works</font>
									</a>-->
						</h2>

						
							<form method="post" action="joinUs.php">
										<div class="row uniform">
											<div class="6u$">
												<input type="text" name="first-name" id="first-name" required="true" value="<?php echo isset($_POST['first-name']) ? $_POST['first-name'] : '' ?>" placeholder="First Name" />
											</div>
											<div class="6u$" style="clear: none;">
												<input type="text" name="last-name" id="last-name" required="true" value="<?php echo isset($_POST['last-name']) ? $_POST['last-name'] : '' ?>" placeholder="Last Name" />
											</div>
											<div class="12u$">
										        <input type="text" name="username" id="username" required="true" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" placeholder="Username" />
											</div>
											<div class="12u$">
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
															width: 100%;" type="password" name="password" id="password" required="true" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" placeholder="Password" />
											</div>
											<div class="12u$">
												<input type="email" name="email" id="email" required="true" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" placeholder="Email" />
											</div>
											<div class="12u$">
												<input type="text" name="address" id="address" required="true" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" placeholder="Street Address" />
											</div>
											<div class="12u$">
												<input type="text" name="city" id="city" required="true" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" placeholder="City" />
											</div>
											<div class="6u$">
												<div class="select-wrapper">
													<select name="state" id="state" required="true">
														<option value="AL">Alabama</option>
														<option value="AK">Alaska</option>
														<option value="AZ">Arizona</option>
														<option value="AR">Arkansas</option>
														<option value="CA">California</option>
														<option value="CO">Colorado</option>
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="DC">District Of Columbia</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="HI">Hawaii</option>
														<option value="ID">Idaho</option>
														<option value="IL">Illinois</option>
														<option value="IN">Indiana</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NV">Nevada</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NM">New Mexico</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="ND">North Dakota</option>
														<option value="OH">Ohio</option>
														<option value="OK">Oklahoma</option>
														<option value="OR">Oregon</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="SD">South Dakota</option>
														<option value="TN">Tennessee</option>
														<option value="TX">Texas</option>
														<option value="UT">Utah</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WA">Washington</option>
														<option value="WV">West Virginia</option>
														<option value="WI">Wisconsin</option>
														<option value="WY">Wyoming</option>
													</select>
												</div>
											</div>
											<div class="6u$" style="clear: none;">
												<input type="text" name="zip-code" id="zip-code" required="true" value="<?php echo isset($_POST['zip-code']) ? $_POST['zip-code'] : '' ?>" placeholder="Zip Code" />
											</div>
											<div class="12u$">
												<input type="checkbox" id="agreement" name="agreement" required="true">
												<label for="agreement">I agree to the terms and services.</label>
											</div>
											<div  class="12u$">
												<input style="display: block; margin: auto" type="submit" value="Sign Up and Subscribe!" class="special" />
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
	$firstname = mysql_real_escape_string($_POST['first-name']);
	$lastname = mysql_real_escape_string($_POST['last-name']);
	$password = mysql_real_escape_string($_POST['password']);
	$address = mysql_real_escape_string($_POST['address']);
	$email = mysql_real_escape_string($_POST['email']);
	$city = mysql_real_escape_string($_POST['city']);
	$state = mysql_real_escape_string($_POST['state']);
	$zipcode = mysql_real_escape_string($_POST['zip-code']);
	//$agreement = mysql_real_escape_string($_POST['agreement']);
	$bool = true;

	if (1 === preg_match('~[0-9]~', $firstname) || 
		1 === preg_match('~[0-9]~', $lastname) ||
		1 === preg_match('/[^a-z]/i',$city)){
		Print '<script>alert("Names and cities should not contain numbers!");</script>'; // Prompts the user
	} else {
		if (1 != preg_match('~[.]~', $email) || 1 != preg_match('~[@]~', $email)) {
			Print '<script>alert("Email must contain at least 1 period and one @ symbol!");</script>'; // Prompts the user
		} else {
			if ( 1 != preg_match('/^[0-9]{5}$/', $zipcode) || strlen($zipcode) != 5) {
				Print '<script>alert("Must input a valid zipcode!");</script>'; // Prompts the user
			} else {

				mysql_connect("localhost", "root") or die(mysql_error()); //Connect to server
				mysql_select_db("FirstDataBase") or die("Cannot connect to database"); //Connect to database
				$query = mysql_query("Select * from userinfo"); //Query the users table
				while($row = mysql_fetch_array($query)) //display all rows from query
				{
					$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
					if($username == $table_users) // checks if there are any matching fields
					{
						$bool = false; // sets bool to false
						Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
						//Print '<script>window.location.assign("joinUs.php");</script>'; // redirects to joinUs.php
					}
				}
				if($bool) // checks if bool is true
				{
					mysql_query("INSERT INTO userinfo(firstname, lastname, username, password, email, address, city, state, zipcode) VALUES ('$firstname','$lastname','$username','$password','$email','$address','$city','$state','$zipcode')"); //Inserts the value to table users
					
					// Print '<script>alert("Successfully joined!");</script>'; // Prompts the user
					// echo '<script type="text/javascript">window.location.href="Receipt.php";</script>';die();
					Print '<script>window.location.assign("Receipt.php");</script>'; // redirects to joinUs.php

					$message = "Congratulations! You have joined Stork.";
					mail($email, 'Welcome to Stork', $message);
				

				}
			}
		}
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