<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
include 'php/config.php';
session_start();
if(isset($_POST['info'])){
    if($_FILES["fileToUpload"]["error"] === 0){
        $target_file ="images/".date("Y_m_d_h_i_sa").".".pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"images/".date("Y_m_d_h_i_sa").".".pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION));
    }else {$target_file=$_SESSION['img'];}
        $id=$_SESSION['user_id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

        // echo $fname." ".$lname.$email.$phone;
        // $sql = "UPDATE users SET img='$target_file' WHERE id='$id'";
        $sql = "UPDATE users SET fname='$fname',lname='$lname',phone='$phone',email='$email',img='$target_file' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
          $_SESSION['img'] = $target_file;
          $_SESSION['fname']=$_POST['fname'];
          $_SESSION['lname']=$_POST['lname'];
          $_SESSION['emain']=$_POST['email'];
          $_SESSION['phone']=$_POST['phone'];
          unset($_POST['info']);
          unset($_FILES["fileToUpload"]);
          header('Location: setting.php');
        }else{
            echo "<p class='text-center alert alert-danger'>Wrong Email</p>";
            header( "refresh:1;url=setting.php" );
        }
}

if(isset($_POST['chpass'])){
    $id=$_SESSION['user_id'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $pass3=$_POST['pass3'];
    if($pass2===$pass3){

    $sql = "UPDATE users SET pass='$pass3' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
      unset($_POST['chpass']);
      header('Location: setting.php');
    }}
    else{
        echo "<p class='text-center alert alert-danger'>Wrong Password</p>";
        header( "refresh:1;url=setting.php");
    }

}



?>