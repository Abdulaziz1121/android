<?php

$connection = mysqli_connect("localhost","root","","android") or die("Error " . mysqli_error($connection));

$userId =$_POST['userId'];

$sql = "DELETE FROM users WHERE id = '$userId'";
mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));


mysqli_close($connection);
?>