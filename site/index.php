<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
session_start() ;
include "php/config.php";
if (!isset($_SESSION['user_id']) || $_SESSION['type'] != "1") {
	header("location:home.php");
	
}


include "addition/header.php";
$userid= $_SESSION['user_id'];

if(isset($_POST['btn'])){
	$postid=$_POST['id'];
	$sql = "UPDATE posts SET `state`='1',`help_id`=$userid WHERE id=$postid ";
if(mysqli_query($conn, $sql)){
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
}


?>

<div class="col-xl-12">
	<div class="col-xl-12">
		<div class="full-page-content-inner">
			<h3 class="page-title">Available posts</h3>

		<div class="freelancers-container freelancers-grid-layout margin-top-35">

<?php 

$sql1="SELECT * FROM posts ORDER BY stars DESC";
$q1 = mysqli_query($conn , $sql1) ;
while($data1 = mysqli_fetch_assoc($q1)){
    $title=$data1['title'];
    $body=$data1['body'];
    $time=$data1['time'];
    $stars=$data1['stars'];
    $user_id=$data1['user_id'];
	$id=$data1['id'];
	$sql="SELECT * FROM users where id ='$user_id'";
				$q = mysqli_query($conn , $sql) ;
				$data = mysqli_fetch_assoc($q) ;
	if($data1['state']==0){
    ?>

				<!--Freelancer -->
			<div class="freelancer">
					<!-- Overview -->
				<div class="freelancer-overview">
					<div class="freelancer-overview-inner">	
							<!-- Bookmark Icon -->
						<p><span class="bookmark-icon" name="stars"></span></p>
				             <!-- Avatar -->
						<div class="freelancer-avatar">
							<div class="verified-badge"></div>
							<img src="images/help.jpg" alt="">
						</div>
							<!-- Name -->
						<div class="freelancer-name">
						    <h2 style="	font-family: 'Dancing Script', cursive;"> <?php echo $data['fname'] . " " . $data['lname'];?></h2>
							<h4><?php echo $title; ?></h4>
							<span><?php echo "Date of help: " . $time; ?></span><br>
							<span><?php echo $stars; ?></span>&nbsp;&nbsp;<span class="fa fa-star checked"></span>
						</div>

					</div>
				</div>
					<!-- Details -->
				<div class="freelancer-details">
					<div class="freelancer-details-list">
						<p style="font-size:25px"><?php echo $body; ?></p>
						<form method ="post">
						<input type="hidden" name="id" value="<?=$id?>">
						<input type="submit" name="btn" value="Help" class="js-click" class="btn btn-success mt-4" style="width:100%;">
						</form> 
					</div>
					
					
				</div>
			</div>
				<!-- Freelancer / End -->


<?php 
}elseif($data1['state']==1){	

?>			
			<div class="freelancer">
					
				<div class="freelancer-overview">
					<div class="freelancer-overview-inner">	
				
						<div class="freelancer-avatar">
							
							<img src="images/help2.jpg" alt="">
						</div>
							<!-- Name -->
						<div class="freelancer-name">
						    <h2 style="	font-family: 'Dancing Script', cursive;"> 
							<?php echo $data['fname'] . " " . $data['lname'];?></h2>
							<h4><?php echo $title ; ?></h4>
							<span><?php echo "Date of help: " . $time ; ?></span><br>
							<p><?php echo " Phone number: " . $data['phone'];?></p>
							<p><?php echo "Email: " . $data['email'];?></p>

						</div>
					</div>
				</div>
					<!-- Details -->
				<div class="freelancer-details">
					<div class="freelancer-details-list">
						<p><?php echo $body; ?></p>
						<input type="submit" name="btn" value="Help" class="js-click" class="btn btn-success mt-4" 
						style="background-color:gray;width:100%;" disabled>
					</div>
					
				</div>
			</div>
<?php 
}	
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