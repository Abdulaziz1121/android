<?php
include 'connection.php';

$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
if(isset($_POST['id']) &&  isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])){
$id = $_POST['id'];
$S_name = $_POST['name'];
$S_Phone = $_POST['phone'];
$S_Email = $_POST['email'];

$Sql_Query = "UPDATE users SET name= '$S_name', phone = '$S_Phone', email = '$S_Email' WHERE id = $id";
if(mysqli_query($con,$Sql_Query))
{
echo 'Record Updated Successfully';
}
else
{
echo 'Something went wrong';
}
}
mysqli_close($con);
?>
