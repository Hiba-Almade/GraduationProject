<?php 
include 'php/config.php';


session_start() ;

if (!isset($_SESSION['user_id'])) {
	header("location:home.php") ;
}

$user_id=$_SESSION['user_id'];

if(isset($_POST['btn'])){
 
	$title = $_POST['title'] ;
	$dime= $_POST['time'] ;
	$body = $_POST['body'] ;
    $sql = "INSERT INTO `posts`(`title`,`time`, `body`, `user_id`) VALUES ( '$title' ,'$time', '$body' , '$user_id')" ;
	$q = mysqli_query($conn , $sql) ;
	if ($q) {
        echo "post inserted successfully " ;
        header('location:index2.php') ;
	}
	else {
		 echo "something wrong" ;
	}

    
}

?>


<?php include"addition/header.php";?>


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Ask for help</h3>

			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Form asking for help</h3>
						</div>
					<form method="post">

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Title</h5>
										<input type="text" name="title" class="with-border">
									</div>
								</div>
								
								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Date</h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" name="time" type="date" placeholder="date">
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Describtion</h5>
										<textarea name="body" cols="30" rows="5" class="with-border"></textarea>
									</div>
									<div class="col-xl-12">
										<input type="submit" name="btn" value="Post" class="btn btn-success mt-4 button ripple-effect big margin-top-30">
									</div>

								</div>

							</div>
						</div>
					</form>
				</div>
				</div>
</div>
</div>
<?php include "addition/footer.php";?>
