<?php include "addition/header.php";?>
<!-- Titlebar
================================================== -->
<div class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><img src="images/logo.png" alt=""></div>
						<div class="header-details">
							<h3>ANA LAK/ انا لك <span style="font-family: 'Dancing Script', cursive;">Social media site for help</span></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-12">

			<div class="single-page-section"style="background-image: url(images/about.png);
 										background-position: right ;
  										background-repeat: no-repeat ;
  										background-size: contain;">
				<h3 class="margin-bottom-25">About website</h3>
				<p>This project was developed to serve the local community of the blind.<br>
                   As the loss of the sense of sight makes a person vulnerable to some difficulties in performing his daily work,<br> especially university students.
				   Among the most prominent problems that may face them:</p>
				   <ul>
                   <li>	Inability to write on their college or school exams.</li>
                   <li>	Inability to read due to the lack of books available in Braille.</li>
				   <li>	Difficulty moving from one place to another.</li>
                   </ul>
                  <p> Through the site that we have developed,<br> it is possible to request 
				   assistance and provide volunteers who provide their services and do the work to be accomplished.</p>

			
			

					
				</div>

			</div>
			<!-- Boxed List / End -->

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Type of users:</h3>
				</div>
				<ul class="boxed-list-ul">
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h2>The blind</h2>
								
								<div class="item-description">
									<p  style="font-size:xlarge;">He can ask for help with anything he needs, just by telling us some details and the required date, and we will take care of finding an assistant</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h2>The volunteer</h2>
								
								<div class="item-description">
									<p style="font-size:xlarge;">If you love assistance and are looking for an opportunity, then we will reach you with many of the blind’s needs, and you can communicate with them</p>
								</div>
							</div>
						</div>
					</li>
				</ul>

			</div>
			<!-- Boxed List / End -->

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include "addition/footer.php";?>

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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
}); 
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>

</body>
</html>