<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
	<div style="height: 100px; width: 100%;"></div>
<?php
	include("connect.php");
	$q="select * from books";
	
	echo '<table cellpadding="20" class="table table-tabbed">';
	echo '<tr>';
	echo '<th>Book Image</th>';
	echo '<th>Book Id</th>';
	echo '<th>Book Name</th>';
	echo '<th>Book Price</th>';
	echo '<th>Book Author</th>';
	echo '</tr>';
	while($row=mysqli_fetch_array($r))
	{
		echo '<tr>';
		echo '<td><img src="'.$row['Book_Image'].'" style="width:80px; height:100px;"/></td>';
		echo '<td>'.$row['Book_ID'].'</td>';
		echo '<td>'.$row['Book_Name'].'</td>';
		echo '<td>'.$row['Book_Price'].'</td>';
		echo '<td>'.$row['Book_Author'].'</td>';
		
		echo '<td><a href="Edit.php?id='.$row['Book_ID'].'">Edit</a></td>';
		//echo '<td><a href="delete.php?id='.$row['empId'].'">Delete</a></td>';
		echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$row['Book_ID']."'>delete</a></td>'";


		echo '<td></td>'; 
		echo '</tr>';
	}
	echo '</table>';

?>
<a href="insert.php" style="padding:10px; border: gray 3px solid;">Insert</a>

</body>
</html>