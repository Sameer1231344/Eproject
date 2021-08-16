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
					$fName=$_FILES['Book_Image']['name'];
					$fSize=$_FILES['Book_Image']['size'];
					$fType=$_FILES['Book_Image']['type'];
					$fError=$_FILES['Book_Image']['error'];
					$fTempName=$_FILES['Book_Image']['tmp_name'];
					@$ext=end(explode(".",$fName));
				
					if($fSize>20000)
					{

						$error[0]="File size is greater than 2MB";

					}

					if(in_array($ext, $extension)==false)
					{

						$error[1]="This file extension is not allowed!";
					}

	
	$id=$_POST['Book_ID'];
	$name=$_POST['Book_Name'];
	$price=$_POST['Book_Price'];
	$author=$_POST['Book_Author'];
	$ImageUrl="images/".$fName;
	$q='insert into book_management values("'.$id.'","'.$name.'","'.$price.'","'.$author.'","'.$ImageUrl.'")';
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
	<p>Book ID:  <input type="text" name="Book_ID"></p>
	<p>Book Name:  <input type="text" name="Book_Name"></p>
	<p>Book Price:  <input type="text" name="Book_Price"></p>
    <p>Book Author:  <input type="text" name="Book_Author"></p>
	<p>Book Image:  <input type="file" name="Book_Image"></p>

	<p><input type="submit" name="btnSubmit" value="Insert"></p>
</form>

</body>
</html>