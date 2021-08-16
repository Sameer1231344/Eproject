<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include("connect.php");
	if(isset($_POST['btn']))
	{
		$Student_Id=$_POST['stdID'];
		$Student_Name=$_POST['stdName'];
		$Student_Marks=$_POST['stdMarks'];
		$Student_Contact=$_POST['stdCon'];
		$Current_Semester=$_POST['stdsem'];
		

		$q='insert into student values("'.$Student_Id.'","'.$Student_Name.'","'.$Student_Marks.'","'.$Student_Contact.'",
		"'.$Current_Semester.'")';
		$r=mysqli_query($conn,$q);

		if($r!=null)
		{
		echo '<script>alert("Record Inserted!");</script>';

		}
		else
		{

			echo '<script>alert("Error in Insertion!");</script>';
		}

	}

?>

<form id="form1" name="form1" method="POST" action="">
	<p>Student Id:  <input type="text" name="stdID"></p>
	<p>Student Name:  <input type="text" name="stdName"></p>
	<p>Student Marks:  <input type="text" name="stdMarks"></p>
	<p>Student Contact:  <input type="text" name="stdCon"></p>
	<p>Student Current semester:  <input type="text" name="stdsem"></p>
	<p><input type="submit" name="btn" value="Insert"></p>
</form>


</body>
</html>