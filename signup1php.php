<?php

$username = filter_input(INPUT_POST, 'username');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

/*if(!empty($phone)){
if(!empty($email)){*/
//if (!empty($username)){
//if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


//if (mysqli_connect_error()){
//die('Connect Error ('. mysqli_connect_errno() .') '
//. mysqli_connect_error());
//}
//else{
$sql = "INSERT INTO login (username,phone,email, password)
VALUES ('$username','$phone','$email','$password')";
if ($conn->query($sql)){
	header('Location:submit.html');
//echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
//}
//}
//else{
//echo "Password should not be empty";
//die();
//}
//}
//else{
//echo "Username should not be empty";
//die();
//}
?>