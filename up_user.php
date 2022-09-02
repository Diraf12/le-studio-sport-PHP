<?php
$link = mysqli_connect("localhost", "farid", "", "user");
$id=$_POST["id"];
$email = $_POST ["email"];
$password = $_POST ["password"];
$sql = "UPDATE user SET email='$email', password='$password'  WHERE id=$id";

if (mysqli_query($link, $sql)){
    header('location: users.php?up=1');
}else{
    header('location: users.php?up=0');
}
  ?>
  