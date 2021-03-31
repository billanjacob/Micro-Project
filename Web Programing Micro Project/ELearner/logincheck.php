<?php 
$username = $_POST['username'];
$password = $_POST['password'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "e-learner";

$con = mysqli_connect($server, $user, $pass, $database);


	$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'")
				or die("Failed to query database".mysqli_error());
	
	
	if(mysqli_num_rows($result) > 0 )
	{
		while($row=mysqli_fetch_array($result))
		{
				if($row['username']=$username && $row['password']=$password)
				{
					echo "Login success";
					header("Location: http://localhost/Elearner/index.html");
				}
				
		}
		
	}
	else
				{
					echo'<script>alert("Login failed")</script>';
					
					header("Location: http://localhost/Elearner/login.php");

				}

	
?>
