<?php 
$adminname = $_POST['adminname'];
$password = $_POST['password'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "e-learner";

$con = mysqli_connect($server, $user, $pass, $database);

	$result = mysqli_query($con,"SELECT * FROM admins WHERE adminname='$adminname' AND password='$password'")
				or die("Failed to query database".mysql_error());
	
	if(mysqli_num_rows($result) > 0 )
	{
		while($row=mysqli_fetch_array($result))
		{
				if($row['adminname']=$adminname && $row['password']=$password)
				{
					echo "Login success";
					header("Location: http://localhost/Elearner/altercourse.php");
				}
				
		}
		
	}
	else
				{
					echo'<script>alert("Login failed")</script>';
					
					header("Location: http://localhost/Elearner/adminlogin.html");

				}

	
?>
