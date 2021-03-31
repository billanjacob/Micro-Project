<!DOCTYPE html>
<html>
<head>
 <title>E-Learner</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1 >E-Learner</h1>

   <ul>
    <li><a href="index.html">Home</a></li> &nbsp &nbsp  &nbsp &nbsp 
    <li><a href="about.html">AboutUs</a></li> &nbsp  &nbsp &nbsp &nbsp
    <li><a href="contact.html"><li>Contact</a></li> &nbsp  &nbsp &nbsp &nbsp
	<li><a href="login.html"><li>Logout</a></li>
   </ul>
	<div class="btn-group">

<br><br>
<h2> COURSES</h2>

<?php   
$server = "localhost";
$user = "root";
$pass = "";
$database = "e-learner";


$con = mysqli_connect($server, $user, $pass, $database);

$query='SELECT cname FROM courses';
$result = mysqli_query($con,$query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
 
	
	$name=$row['cname'];
	echo'<button  class="button button2" type="button">'.$name.'</button>';
	$i=$i+1;

}

    mysqli_close($con);
?>

</body>
</html>  