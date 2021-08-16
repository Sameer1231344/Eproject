<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("connect.php");
	if(isset($_GET['id']))
	{

		$id=$_GET['id'];
		$q='select * from Employee where Book_ID='.$id;
		$r=mysqli_query($conn,$q);
		$row=mysqli_fetch_array($r);


	}

	if(isset($_POST['Update']))
	{
	$id=$_POST['Book_ID'];
	$name=$_POST['Book_Name'];
	$price=$_POST['Book_Price'];
	$author=$_POST['Book_Author'];

		$q='update Employee set Book_ID="'.$name.'",Book_Price="'.$price.'",Book_Author="'.$author.'",where Book_ID="'.$id.'"';
		$r=mysqli_query($conn,$q);
		if($r!=null)
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
<form method="post" name="form1">
<table>
	
	<tr>
		<td>Employee Id</td>
		<td><input type="text" name="Book_ID" value="<?php echo $row['Book_ID']; ?>"></td>
	</tr>
	<tr>
		<td>Employee Name</td>
		<td><input type="text" name="Book_Name" value="<?php echo $row['Book_Name']; ?>"></td>
	</tr>
	<tr>
		<td>Employee Salary</td>
		<td><input type="text" name="Book_Price" value="<?php echo $row['Book_Price']; ?>"></td>
	</tr>
	<tr>
		<td>Employee Email</td>
		<td><input type="text" name="Book_Author" value="<?php echo $row['Book_Author']; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="Update" value="Update"></td>
	</tr>
</table>
</form>

</body>
</html>