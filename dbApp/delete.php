<?php
include('connect.php');
	if(isset($_GET['id']))
	{

		$id=$_GET['id'];
		$q='delete from Employee where empId="'.$id.'"';
		$result=mysqli_query($conn,$q);
		if($result!=null)
		{
			echo '<script>alert("Record Updated!");</script>';
			header('location:details.php');

		}
		else
		{
			echo '<script>alert("Error!");</script>';
		}

	}

?>