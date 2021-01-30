<?php
include 'php/config.php';
// $sql = "update FROM posts WHERE id = ".$_GET['id'];
$sql = "UPDATE posts SET `state`='0' WHERE id = ".$_GET['id'];
$result = $conn->query($sql);
header("location:index2.php");

?>