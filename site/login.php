
<?php 
ob_start();
include 'php/config.php';

if (isset($_POST['btn1'])) {
	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;
	$sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'" ;
	$q = mysqli_query($conn , $sql) ;
	$data = mysqli_fetch_assoc($q) ;
	$count = mysqli_num_rows($q) ;
	if ($count == 1) {
		    $_SESSION['user_id'] = $data['id'];
		    $_SESSION['fname'] = $data['fname'];
			$_SESSION['lname'] = $data['lname'];
			$_SESSION['img'] = $data['img'];
			$_SESSION['phone'] = $data['phone'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['type'] = $data['type'] ;		
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
		echo '<script>document.getElementById("alertta").style.display="block";
		document.getElementById("alertta").textContent="Wrong email or password";</script>';
		unset($_POST['btn1']);
	}
}

?>
			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-family: 'Dancing Script', cursive;">We're glad to see you again!</h3>
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
					<input type="submit" name="btn1" value="Login" class="btn btn-success mt-4" style="width:100%;">
					
				</form>
				
				<!-- Button -->
				
				


			</div>
