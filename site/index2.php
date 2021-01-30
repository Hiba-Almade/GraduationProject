<?php
session_start() ; 
include 'addition/header.php';
include 'php/config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['type'] != "0") {
	header("location:home.php");
	
}
$user_id=$_SESSION['user_id'];
?>


<br>
<!-- Container -->
<div class="container">

		<div class="row">
		<button style=" width:100%" type="button" class="btn btn-outline-primary btn-lg btn-block"><a href="help.php"> Ask for help</a></button>


			<div class="section-headline border-top margin-top-45 padding-top-45 margin-bottom-30">
				<h4>Posts</h4>
			</div>
			
			<!-- Tabs Container -->
			<div class="tabs">
				<div class="tabs-header">
					<ul>
						<li class="active"><a href="#tab-1" data-tab-id="1" id="tab1">Available posts</a></li>
						<li><a href="#tab-2" data-tab-id="2" id="tab2">Requested posts</a></li>
						<li><a href="#tab-3" data-tab-id="3" id="tab3">Finished posts</a></li>
					</ul>
					<div class="tab-hover"></div>
					<nav class="tabs-nav">
						<span class="tab-prev"><i class="icon-material-outline-keyboard-arrow-left"></i></span>
						<span class="tab-next"><i class="icon-material-outline-keyboard-arrow-right"></i></span>
					</nav>
				</div>
				<!-- Tab Content -->
				<div class="tabs-content">
				<div class="tab active" data-tab-id="1">
						<div class="section-headline margin-bottom-30">
				<h4>Available posts</h4>
			</div>
			<table class="basic-table">
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Time</th>
					<th>Remove</th>
				</tr>

			<?php 

			$sql1="SELECT * FROM posts where user_id ='$user_id'&& state=0";
			$q1 = mysqli_query($conn , $sql1) ;
			while($data1 = mysqli_fetch_assoc($q1)){
				$title=$data1['title'];
				$body=$data1['body'];
				$time=$data1['time'];
				$id=$data1['id'];
				echo '
				<tr>
					<td data-label="Column 1">'.$title.'</td>
					<td data-label="Column 2">'.$body.'</td>
					<td data-label="Column 3">'.$time.'</td>
					<td data-label="Column 4"><a href="removepost.php?id='.$id.'" class="btn btn-outline-primary btn-block">Remove</a></td>
				</tr>
				';
			}
				
				?>
			</table>
		</div>


					<div class="tab active" data-tab-id="2">
						<div class="section-headline margin-bottom-30">
				<h4>Requested posts</h4>
			</div>
			<table class="basic-table">

				<tr>
					<th>Title</th>
					<th>Helper name</th>
					<th>Contact</th>
					<th>Action</th>
				</tr>

				<?php 

			$sql1="SELECT * FROM posts where user_id ='$user_id'&& state=1";
			$q1 = mysqli_query($conn , $sql1) ;
			while($data1 = mysqli_fetch_assoc($q1)){
				$title=$data1['title'];
				$body=$data1['body'];
				$time=$data1['time'];
				$id=$data1['id'];
				$usid=$data1['help_id'];

				$sql="SELECT * FROM users where id ='$usid'";
				$q = mysqli_query($conn , $sql) ;
				$data = mysqli_fetch_assoc($q) ;
				echo '
				<tr>
					<td data-label="Column 1">'.$title.'</td>
					<td data-label="Column 2">'.$data["fname"].' '.$data["lname"].'</td>
					<td data-label="Column 3">'.$data["phone"].'<br>'.$data["email"].'</td>
					<td data-label="Column 4"><a href="Done.php?id='.$id.'" class="btn btn-outline-primary btn-block">Done</a><span style="font-size:28px;">OR</span> <a href="back.php?id='.$id.'" class="btn btn-outline-primary btn-block">Back</a> </td>
				</tr>
				';
			}
				
				?>

			</table>
		</div>

		<div class="tab active" data-tab-id="3">
						<div class="section-headline margin-bottom-30">
				<h4>Finished posts</h4>
			</div>
			<table class="basic-table">

				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Time</th>
					<th>Action</th>
				</tr>

				<?php 

				$sql1="SELECT * FROM posts where user_id ='$user_id'&& state=2";
				$q1 = mysqli_query($conn , $sql1) ;
				while($data1 = mysqli_fetch_assoc($q1)){
				$title=$data1['title'];
				$body=$data1['body'];
				$time=$data1['time'];
				$id=$data1['id'];
				echo '
				<tr>
				<td data-label="Column 1">'.$title.'</td>
				<td data-label="Column 2">'.$body.'</td>
				<td data-label="Column 3">'.$time.'</td>
				<td data-label="Column 4"><a href="removepost.php?id='.$id.'" class="btn btn-outline-primary btn-block">Remove</a></td>
				</tr>
				';
				}

				?>

			</table>
		</div>







					</div>
				</div>
			</div>

		
		<div class="col-xl-12">

			
</div>
</div>
<br><br><br><br>


<?php include"addition/footer.php"; ?>