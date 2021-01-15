<?php 

ob_start();
include 'php/config.php';

if(isset($_POST['btn'])){
	
	$fname = $_POST['fname'] ;
	$lname = $_POST['lname'] ;
	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;
	$pass2 = $_POST['pass2'] ;
	$phone=$_POST['phone'] ;
	$type;
	if (isset($_POST['check'])){  
            $type='1';
    } else {  
            $type='0';
    }  
	
	$mobileno = strlen ($phone);  
	$length = strlen($mobileno);  

		$sql2 = "SELECT * FROM users WHERE email = '$email'" ;
		$q2 = mysqli_query($conn , $sql2) ;
		$data2 = mysqli_fetch_assoc($q2) ;
		$count = mysqli_num_rows($q2) ;
		if ($count == 1) {
			echo "This Email already exists, choose another one";	
		}
		elseif ($pass!==$pass2) {
			echo "Password and Confirm password should match!";
		}
		elseif(!preg_match("/^[a-zA-z]*$/", $fname )||!preg_match ("/^[a-zA-z]*$/", $lname)){  
    		echo "Only alphabets and whitespace are allowed in name.";  
		}
		elseif (!preg_match ("/^[0-9]*$/", $phone)){  
     		echo "Only numeric value is allowed in Phone number.";  
		}
		elseif( $length < 10 && $length > 10) {    
            echo "Phone number must have 10 digits.";  
		}
		else {
			$sql = "INSERT INTO `users`( `fname`, `lname`, `email`, `pass`,`phone`,`type`) VALUES('$fname','$lname','$email','$pass','$phone','$type')" ;
			$q = mysqli_query($conn , $sql) ;
			if ($q) {
				
				if($type =='1'){

					header("Location: index.php");
					
				}elseif ($type == '0') {
					header("Location: index2.php");
					
				}else{
					echo "Something wrong";
				}
			}
			else {
				echo "Invalid Data" ;
			}
		}
 

}
?>

<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Lets create your account!</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="register-account-form">

					<div class="row mb-4">
    					<div class="col d-flex justify-content-center">
      						 <div class="input-with-icon-left">
								<i class="icon-material-outline-face"></i>
								<input type="text" class="input-text" name="fname" id="fname-register" placeholder="First name" required/>
							</div>
    					</div>

   						<div class="col">
      						<div class="input-with-icon-left">
								<i class="icon-material-outline-face"></i>
								<input type="text" class="input-text " name="lname" id="lname-register" placeholder="Last name" required/>
							</div> 
   						 </div>
  					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-face"></i>
						<input type="text" class="input-text" name="phone" id="phone-register" placeholder="Phone number" required/>
					</div> 

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="pass" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="pass2" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>
					
					<div class="form-check">
  						<input class="form-check-input" type="checkbox" value=""name="check" id="defaultCheck1"/>
  						<label for="defaultCheck1">
    						Register as a volunteer
  						</label>
					</div>


				<!-- Button -->
				<input type="submit" name="btn" value="Register" class="btn btn-success mt-4">
	        </form>
</div>