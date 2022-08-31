<?php
// 
$link = mysqli_connect("localhost", "farid", "", "user");
$id=$_GET["id"];
$sql = "DELETE FROM user WHERE id=$id";
$results = mysqli_query($link, $sql);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
  } 
  $sql = "DELETE FROM user WHERE id=$id";
  
  if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $link->error;
  } 
  $link->close();

  ?>