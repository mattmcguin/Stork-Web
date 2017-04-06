<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php session_start(); 
if (isset($_SESSION['signInStatus'])) {
if ($_SESSION['signInStatus']==0) Print '<script>window.location.assign("signIn.php");</script>';
} else Print '<script>window.location.assign("signIn.php");</script>';

?>
<html>
	<head>
		<title>My Requests</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
											<li><a href="storkRequests.php">Home</a></li>
											<li><a href="My Requests.php">My Requests</a></li>
											<li><a href="destroySession.php">Sign Out</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2 style="color: #F7921E">My Requests</h2>
							<p>View your request history</p>
						</header>
								<section>
									
										<!--<h4 style="color: #F7921E">My Requests</h4>-->
									<!-- Comment this next line out if want to change formatting -->
									<!-- <div class="table-wrapper"> -->
									<!-- Un-Comment-out these next 2 lines if want to change formatting -->
								    <section class="wrapper style5">
										<form method="post" action="userindex.html">
										<div  class="12u$">
												<input style="display: block; margin: auto" type="submit"value="Make a Request" class="special" />
											</div>
											</form><br/><br/>
									<div class="inner">
										<table>
											<thead>
												<tr>
													<th>Date</th>
													<th>Type</th>
													<th>Description</th>
													<th>Price</th>
													<th>Priority</th>
													<th>Deliver To </th>
													<th>Status</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<form method="post" action="cancelRequest.php">
												<tr>
													<td><input type="text" readonly style="display: none" name="date" value="April 28, 2017"/>April 28, 2017</td>
													<td><input type="text" readonly name="category" value="Other" style="display: none"/>Other</td>
													<td><input type="text" readonly name="description" value="Books" style="display: none"/>Books</td>
													<td><input type="text" readonly name="price" value="$12.50" style="display: none"/>$12.50</td>
													<td><input type="text" readonly name="priority" value="Normal" style="display: none"/>Normal</td>
													<td><input type="text" readonly name="location" value="123 Street St." style="display: none"/>123 Street St.</td>
													<td><input type="text" readonly name="status" value="Incomplete" style="display: none"/>Incomplete</td>
													<td><input type="submit" value="Cancel Request" class="button special fit small" /></td>
												</tr>
												</form>
												<form method="post" action="cancelRequest.php">
												<tr>
													<td><input type="text" readonly style="display: none" name="date" value="May 6, 2017">May 6, 2017</td>
													<td><input type="text" readonly style="display: none" name="category" value="Food">Food</td>
													<td><input type="text" readonly style="display: none" name="description" value="NEED FOOD NOW">NEED FOOD NOW</td>
													<td><input type="text" readonly style="display: none" name="price" value="$50.00">$50.00</td>
													<td><input type="text" readonly style="display: none" name="priority" value="High">High</td>
													<td><input type="text" readonly style="display: none" name="location" value="Carr's Hill'">Carr's Hill</td>
													<td><input type="text" readonly style="display: none" name="status" value="Request Taken">Request Taken</td>
													<!-- <td><a href="#" class="button special fit small">Cancel Request</a></li></td> -->
													<td><input type="submit" value="Cancel Request" class="button special fit small"/></td>
												</tr>
												</form>
												<form method="post" action="cancelRequest.php">
												<tr>
													<td><input type="text" readonly style="display: none" name="date" value="May 27, 2017">May 27, 2017</td>
													<td><input type="text" readonly style="display: none" name="category" value="Errand">Errand</td>
													<td><input type="text" readonly style="display: none" name="description" value="Pick up demo mix tapes, tapes already paid for">Pick up demo mix tapes, tapes already paid for</td>
													<td><input type="text" readonly style="display: none" name="price" value="$10.00">$10.00</td>
													<td><input type="text" readonly style="display: none" name="priority" value="High">High</td>
													<td><input type="text" readonly style="display: none" name="location" value="Trin">Trin</td>
													<td><input type="text" readonly style="display: none"name="status" value="Request Taken">Request Taken</td>
													<!-- <td><a href="#" class="button special fit small">Cancel Request</a></li></td> -->
													<td><input type="submit" value="Cancel Request" class="button special fit small"/></td>
												</tr>
												</form>
												<form method="post" action="cancelRequest.php">
												<tr>
													<td><input type="text" readonly style="display: none" name="date" value="September 25, 2017">September 25, 2017</td>
													<td><input type="text" readonly style="display: none" name="category" value="Services">Services</td>
													<td><input type="text" readonly style="display: none" name="description" value="Calculus Tutoring-Don't understand integrals">Calculus Tutoring-Don't understand integrals</td>
													<td><input type="text" readonly style="display: none" name="price" value="$10.00">$10.00</td>
													<td><input type="text" readonly style="display: none" name="priority" value="Normal">Normal</td>
													<td><input type="text" readonly style="display: none" name="location" value="Clem 1st Floor">Clem 1st Floor</td>
													<td><input type="text" readonly style="display: none" name="status" value="Incomplete">Incomplete</td>
													<td><input type="submit" value="Cancel Request" class="button special fit small"/></td>
												</tr>
												</form
											</tbody>
										</table>
									</div>
								</section>
								</article>
								

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