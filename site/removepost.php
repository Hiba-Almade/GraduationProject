<?php
include 'php/config.php';
$sql = "DELETE FROM posts WHERE id = ".$_GET['id'];
$result = $conn->query($sql);
header("location:index2.php");

?>