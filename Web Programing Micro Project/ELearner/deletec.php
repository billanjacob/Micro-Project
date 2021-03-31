<?php 
$id = $_POST['cid'];
$name = $_POST['cname'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "e-learner";
$con = mysqli_connect($server, $user, $pass, $database);

if($_SERVER['REQUEST_METHOD'] == "POST"){


$sql = "DELETE FROM courses WHERE cid='$id' AND cname='$name'";
if (mysqli_query($con, $sql)){
					header("Location: altercourse.php");
}

else 
{
	echo mysqli_error($con);
	echo"invalid";
}
}
?>