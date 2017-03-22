<!DOCTYPE HTML>

<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
include ('apiCallsData.php');
?>
<html>

<head>
    <title>Welcome to Stork!</title>
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
            <h1><a href="index.html">Stork</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="aboutUs.html" style="color: #F7921E">About Us</a></li>
                           <!--     <li><a href="request.html">Make a Request</a></li>
								<li><a href="Available Requests.html">Elements</a></li>
                                <li><a href="My Requests.html">My Requests</a></li> -->
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <article id="main">
            <header>
                <h2 style="color: #F7921E">You have successfully joined! </h2>
                <p>Subscribe Now to enjoy the Full Service!</p>
                <form action="startPayment.php" method="POST">
                    <input type="hidden" name="csrf" value="<?php echo($_SESSION['csrf']);?>"/>
                    <div class="3u$" style="clear: none; margin-left: 38%">
                        Subcription:<input type="text" style="text-align: center;" name="camera_amount" value="10" readonly></input>
                    </div>
                        <!--Tax:<input type="text" name="tax" value="5" readonly></input><br>
                        Insurance:<input type="text" name="insurance" value="10" readonly></input><br>
                        Handling:<input type="text" name="handling_fee" value="5" readonly></input><br>-->
                        <!--Est. Shipping:<input type="text" name="estimated_shipping" value="2" readonly></input><br>
                        Shipping Discount:<input type="text" name="shipping_discount" value="-2" readonly></input><br>-->
                    <div class="3u$" style="clear: none; margin-left: 38%">
                        Total:<input type="text" style="text-align: center;" name="total_amount" value="10" readonly></input>
                    </div>
                    <div class="3u$" style="clear: none; margin-left: 38%; padding-bottom: 20px;">
                        Currency:<input type="text" style="text-align: center;"name="currencyCodeType" value="USD" readonly></input>
                    </div>
                    <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="Check out with PayPal"></input>
                </form>
            </header>
            <section class="wrapper style5">
                <div class="inner">

                    <!--<h3><center> You have successfully joined Stork!</center></h3>
                    <p><center>To start using Stork, navigate to the Make a Request or Available Requests page!</center></p>-->
                    <img src="images/storklogo.jpg" style="display: block; margin: auto" height="330" width="255" />
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
