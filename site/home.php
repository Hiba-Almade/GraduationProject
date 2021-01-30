<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth transparent">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href=""><img src="images/logo.png" alt="logo pic"></a>
				</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<div class="header-widget">
					<a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
				</div>

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<p id='alertta' style="display:none;" class='alert alert-danger'></p>

<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/back.jpg" style="height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">

	<div class="container">

	<header>
	<div class="overlay">
		<h1>ANA LAK</h1>
		<br>
		<h3>Welcome to our site to help <span style="text-decoration: underline;">THE BLIND</span></h3>
		<p>If you need help or would like to help others, you have found the right place for it.</p>
		<br>
		<a href="about2.php"><button>READ MORE</button></a>
	</div>
	</header>

</div>
</div>




<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">
			<!-- log in-->
                <?php include "login.php";?>
			<!-- Register -->
				<?php include "regester.php";?>

		</div>
	</div>
</div>
<!-- Sign In Popup / End -->

<?php include"addition/footer.php"; ?>