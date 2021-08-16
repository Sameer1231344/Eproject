<?php
	
$username='root';
$hostname='localhost';
$password='';
$dbName='books';

 $conn=mysqli_connect($hostname,$username,$password,$dbName);


if($conn===false)
{

	echo '<script>alert("Error in Coneection");</script>';
}
else
{
echo '<script>alert("Coneected to database books");</script>';

}


?>