<?php 
include 'php/config.php';
session_start() ;

if (isset($_POST['btn'])) {
	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;
	$sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'" ;
	$q = mysqli_query($conn , $sql) ;
	$data = mysqli_fetch_assoc($q) ;
	$count = mysqli_num_rows($q) ;
	if ($count == 1) {
		    $_SESSION['user_id'] = $data['id'] ;
			$type=$data['type'];
		        if($type=='1'){
					header("Location: index.php");
				}elseif ($type == '0') {
					header("Location: index2.php");
				}else{
					echo "Something wrong";
				}
	}
	else {
		echo "<p class='alert alert-danger'>Wrong email or password </p>" ;
	}
}


?>
			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form">

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="pass" id="password" placeholder="Password" required/>
					</div>
					<input type="submit" name="btn" value="Login" class="btn btn-success mt-4">
					
				</form>
				
				<!-- Button -->
				
				


			</div>
