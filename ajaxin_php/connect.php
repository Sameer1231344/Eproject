<?php
	
$username='root';
$hostname='localhost';
$password='';
$dbName='student_details';

 $conn=mysqli_connect($hostname,$username,$password,$dbName);


if($conn===false)
{

	echo '<script>alert("Error in Conection");</script>';
}
else
{
echo '<script>alert("Coneected to database student_details");</script>';

}


?>