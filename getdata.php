<?php
include 'connection.php';

$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$users = array(); 

$sql = "SELECT id,name,phone,email FROM users;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($id, $name,$phone,$email);

while($stmt->fetch()){
 
    $temp = [
    'id'=>$id,
    'name'=>$name,
    'phone'=>$phone,
    'email'=>$email
    ];
      
    array_push($users, $temp);
   }
   echo json_encode($users);

?>