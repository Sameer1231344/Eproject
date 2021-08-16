<?php
	
$username='root';
$hostname='localhost';
$password='';
$dbName='student_details';

 $conn=mysqli_connect($hostname,$username,$password,$dbName);


if($conn===false)
{

	echo '<script>alert("Error in Coneection");</script>';
	echo '<h4>"Error in Coneection to database student_details"</h4>';
}
else
{
echo '<script>alert("Coneected to database student_details");</script>';
echo '<h4>"Coneected to database student_details"</h4>';
}


?>
