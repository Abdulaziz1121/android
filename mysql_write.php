<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$db_name="android";
	$db=mysqli_connect($server_name,$username,$password,$db_name);
	if(!$db) die("Connection problem, try again later");
	// if there is a connection
	if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email = $_POST['email'];
		$query="INSERT INTO users (name,phone,email) values ('$name','$phone','$email')";
		$result=mysqli_query($db,$query);
		if($result) echo "INSERTED A NEW USER";
		else mysqli_error($db);
	}
	
	mysqli_close($db);
		 ?>