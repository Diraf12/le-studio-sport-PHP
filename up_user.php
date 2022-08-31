<?php
// 
$link = mysqli_connect("localhost", "farid", "", "user");
$id=$_GET["id"];
$sql = "UPDATE user SET prenom='popo' WHERE id=$id";
$results = mysqli_query($link, $sql);
if ($results){
    header('location: user.php?up=1');
}else{
    header('location: user.php?up=0');
}
  ?>