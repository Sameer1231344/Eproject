<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('connect.php');



if(isset($_POST['btnSubmit']))
{
                $ImageUrl="";
				$error=Array();
				$fTempName="";
			
					$extension=Array("jpg","png","jpeg","jfif");
					$fName=$_FILES['myFile']['name'];
					
					$fType=$_FILES['myFile']['type'];
					$fError=$_FILES['myFile']['error'];
					$fTempName=$_FILES['myFile']['tmp_name'];
					@$ext=end(explode(".",$fName));
				
					if($fSize>20000)
					{

						$error[0]="File size is greater than 2MB";

					}

					if(in_array($ext, $extension)==false)
					{

						$error[1]="This file extension is not allowed!";
					}

	
	$id=$_POST['txtId'];
	$name=$_POST['txtName'];
	$sal=$_POST['txtSal'];
	$email=$_POST['txtEmail'];
	$pl=$_POST['txtpl'];
	$city=$_POST['txtCity'];
	$ImageUrl="images/".$fName;
	$q='insert into Employee values("'.$id.'","'.$name.'","'.$sal.'","'.$email.'","'.$city.'","'.$ImageUrl.'","'.$pl.'")';
	//$q='insert into Employee values(2142,"xyz",34433,"xyzA@gmail.com","Khi","'.$ImageUrl.'",101)';

	$r=mysqli_query($conn,$q);

	if(empty($error))
	{
	
	move_uploaded_file($fTempName,"images/".$fName);
	echo "<h3>File Uploaded</h3>";
	}
	else
	{
	echo "<h3>Error in File Upload</h3>";
	}
				
					
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


<form id="form1" name="form1" method="POST" action="" enctype="multipart/form-data">
	<p>Employee Id:  <input type="text" name="txtId"></p>
	<p>Employee Name:  <input type="text" name="txtName"></p>
	<p>Employee Salary:  <input type="text" name="txtSal"></p>
	<p>City:  <input type="text" name="txtCity"></p>
	<p>Employee Email:  <input type="text" name="txtEmail"></p>
	<p>Project Lead:  <input type="text" name="txtpl"></p>
	<p>Image:  <input type="file" name="myFile"></p>

	<p><input type="submit" name="btnSubmit" value="Insert"></p>
</form>

</body>
</html>