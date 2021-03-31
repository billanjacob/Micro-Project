<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-learner";
$conn = new mysqli($servername, $username, $password,$dbname);

if($_SERVER['REQUEST_METHOD'] == "POST"){
$username1 = $_POST['username'];
$email1 = $_POST['email'];
$password1 = $_POST['password'];

}

$sql = "INSERT INTO userreg (username,email,password) VALUES ('$username1','$email1','$password1')";
if (mysqli_query($conn, $sql)){
					header("Location: login.html");
}

else 
{
	echo mysqli_error($conn);
	echo"invalid username or password";
}
?>