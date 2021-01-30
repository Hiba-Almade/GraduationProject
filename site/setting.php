<?php include "addition/header.php";?>

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
		<p id='alertta' style="display:none;" class='alert alert-danger'></p>

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<!-- <form action="" method="post"> -->
				<form action="updateInfo.php" method="post" enctype="multipart/form-data">
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">

								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="<?= $_SESSION['img']?>" alt="" />
										<div class="upload-button"></div>
										<input type="file" name="fileToUpload" class="file-upload" id="fileToUpload">

									</div>
								</div>


								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input name="fname" type="text" class="with-border" value="<?= $_SESSION['fname']?>">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Last Name</h5>
												<input  name="lname" type="text" class="with-border" value="<?= $_SESSION['lname']?>">
											</div>
										</div>

										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<div class="account-type">
													<div class="submit-field">
												<h5>Phone number</h5>
												<input name="phone" type="text" class="with-border" value="<?= $_SESSION['phone']?>">
											</div>

												</div>
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input name="email" type="text" class="with-border" value="<?= $_SESSION['email']?>">
											</div>
										</div>

									</div>
								</div>
								<div class="col-xl-12">
								<!-- <input type="submit" class="button ripple-effect big margin-top-30" value="Save Changes" name="info"> -->
								<input class="button ripple-effect big margin-top-30" type="submit" value="Save Changes" name="info">
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>



				<?php
					// if(isset($_POST['info'])){
					// 	var_dump($_FILES);
					// }
				?>
				<!-- Dashboard Box -->
				<form action="updateInfo.php" method="post" enctype="multipart/form-data">
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input name="pass1" type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input name="pass2" type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input name="pass3" type="password" class="with-border">
									</div>
								</div>
								<!-- Button -->
								<div class="col-xl-12">
								<input name="chpass" type="submit" class="button ripple-effect big margin-top-30" value="Change Password">
								</div>

							</div>
						</div>
					</div>
				</div>
				</form>
				


			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
				<strong>© 2021 </strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>



<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete"></script>


</body>
</html>