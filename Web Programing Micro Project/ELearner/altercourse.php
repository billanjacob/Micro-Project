<!DOCTYPE html>
<html>
<head>
 <title>E-Learner</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1 >E-Learner</h1>

   <ul>
    <li><a href="altercourse.php">Home</a></li> &nbsp &nbsp  &nbsp &nbsp 
    <li><a href="addc.html">Add Course</a></li> &nbsp  &nbsp &nbsp &nbsp
    <li><a href="deletec.html"><li>Remove Course</a></li> &nbsp  &nbsp &nbsp &nbsp
	<li><a href="login.html"><li>Logout</a></li>
   </ul>

<br><br><br>
<h2>Available Courses :</h2>
<table>
<tr>
<th>C-id</th><th>Course</th>

<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "e-learner";

$con = mysqli_connect($server, $user, $pass, $database);
$query='SELECT * from courses';
$result = mysqli_query($con,$query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}
while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr><td>".$row['cid']."</td><td>".$row['cname']."</td></tr>";	
}

?>


</body>
</html>                                                                                                                                       