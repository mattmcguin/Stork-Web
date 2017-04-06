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
    <title>Stork</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>

<body class="landing">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.html">Stork</a></h1>
            <nav id="nav"> 
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="storkRequests.php" style="color: #F7921E">Home</a></li>
                                <li><a href="My Requests.php">My Requests</a></li>
                                <li><a href="destroySession.php">Sign Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- One -->
        <section id="one" class="wrapper style1 special">
            <div class="inner">
                <header class="major">
                    <h2 style="color: #11080F">Make a Request</h2>
                    <p>Make a request for the Stork community to take on</p>
                </header>
                <ul class="icons major">
                    <section class="wrapper style5">
                        <div class="inner">
                            <section>
                                <form method="post" action="submitRequest.php">
                                    <div class="row uniform">
                                        <div class="6u 12u$(xsmall)">
                                            <b>Name</b>
                                            <input type="text" name="name" id="name" value="" />
                                        </div>
                                        <div class="6u$ 12u$(xsmall)">
                                            <b>Compensation</b>
                                            <input type="text" name="money" id="money" value="" />
                                        </div>
                                        <div class="6u 12u$(xsmall)">
                                            <b>Deliver To</b>
                                            <input type="text" name="location" id="location" value="" />
                                        </div>

                                        <div class="6u$">
                                            <b>Category</b>
                                            <select name="category" id="category">
														<option value="">Category</option>
														<option value="Food">Food</option>
														<option value="Errand">Errand</option>
														<option value="Services">Services</option>
														<option value="Other">Other</option>
													</select>

                                        </div>
                                        <div class="3u 12u$(small)">
                                            <input type="radio" id="priority-low" name="priority" checked>
                                            <label for="demo-priority-low">Low Priority</label>
                                        </div>
                                        <div class="3u 12u$(small)">
                                            <input type="radio" id="priority-normal" name="priority">
                                            <label for="demo-priority-normal">Normal Priority</label>
                                        </div>
                                        <div class="3u$ 12u$(small)">
                                            <input type="radio" id="priority-high" name="priority">
                                            <label for="demo-priority-high">High Priority</label>
                                        </div>
                                        <div class="12u$">
                                            <b>Message</b>
                                            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                                        </div>
                                        <tfoot>
                                            <tr>
                                                <td><i>Pro Tip: Make sure to include the item price in compensation if your stork is expected to buy your deliverable!</i></td>
                                            </tr>
                                        </tfoot>
                                        <div class="12u$">
                                            <ul class="actions">
                                                <li><input type="submit" value="Send Request" class="special" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>
                </ul>
                </div>
                </section>
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