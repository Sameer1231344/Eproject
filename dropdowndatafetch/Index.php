<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include("connect.php");
$query='select 	Sem_Name from semester';
$r=mysqli_query($conn,$query);
echo'<select onchange="abc()">';
while ($row=mysqli_fetch_array($r)) 
{
	echo '<option value="'.$row[0].'">'.$row[0].'</option>';
}
echo "</select>";
?>
</body>
</html>