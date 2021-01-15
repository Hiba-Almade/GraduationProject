<?php 
session_start() ;
include "php/config.php";
if (!isset($_SESSION['user_id'])) {
	header("location:home.php") ;
	
}


?>


<?php include "addition/header.php";
$userid= $_SESSION['user_id'];

if(isset($_POST['btn'])){
	$postid=$_POST['postid'];
	$sql = "UPDATE posts SET `state`='1',`help_id`=$userid WHERE id=$postid ";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
}

?>

<div class="col-xl-12">
	<div class="col-xl-12">
		<div class="full-page-content-inner">
			<h3 class="page-title">Search Results</h3>
		<div class="notify-box margin-top-15">
			<div class="switch-container">
				<label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Show only posts that need help</span></label>
			</div>
		</div>
		<div class="freelancers-container freelancers-grid-layout margin-top-35">

<?php 

$sql1="SELECT * FROM posts ";
$q1 = mysqli_query($conn , $sql1) ;
while($data1 = mysqli_fetch_assoc($q1)){
    $title=$data1['title'];
    $body=$data1['body'];
    $time=$data1['time'];
    $user_id=$data1['user_id'];
   
    $sql="SELECT * FROM users WHERE id = '$user_id' ";
    $q = mysqli_query($conn , $sql) ;
    $data = mysqli_fetch_assoc($q) ;
    $count = mysqli_num_rows($q) ;
    if ($count == 1) {
        $img="uploads/". $data['img'] ;
        $name=$data['fname'] ." " . $data['lname'];
    }
    
    ?>

				<!--Freelancer -->
			<div class="freelancer">
					<!-- Overview -->
				<div class="freelancer-overview">
					<div class="freelancer-overview-inner">	
							<!-- Bookmark Icon -->
						<span class="bookmark-icon"></span>
				             <!-- Avatar -->
						<div class="freelancer-avatar">
							<div class="verified-badge"></div>
							<img src="images/user-avatar-big-01.jpg" alt="">
						</div>
							<!-- Name -->
						<div class="freelancer-name">
							<h4><?php echo $name; ?></h4>
							<span><?php echo $time; ?></span>
						</div>
						<p><?php echo $title; ?></p>
					</div>
				</div>
					<!-- Details -->
				<div class="freelancer-details">
					<div class="freelancer-details-list">
						<p><?php echo $body; ?></p>
						<form method ="post">
						<input type ="text" value="<?php echo $data1['id'];?>" name="postid" style="display: none;">
						<input type="submit" name="btn" value="Help" class="js-click" class="btn btn-success mt-4" style="width:100%;">
						</form> 
					</div>
					
					
				</div>
			</div>
				<!-- Freelancer / End -->


<?php 
}	

?>

		</div>
			<!-- Freelancers Container / End -->
    </div>
</div>
	<!-- Full Page Content / End -->

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
$('.status-switch label').click(function() { 
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

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>

</body>
</html>