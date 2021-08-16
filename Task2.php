<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$arr=array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20');
/*if ("textarray"==$arr) {
	echo "WE HAVE FOUND YOUR INPUT IN OUR SYSTEM";
}
else{
	echo "WE DIDN'T HAVE FOUND YOUR INPUT IN OUR SYSTEM";
}
*/

if(isset($_POST['btnsubmit']))
		{$textarray==$arr;
		echo "WE HAVE FOUND YOUR INPUT IN OUR SYSTEM";

		
}
else{
	echo "WE DIDN'T HAVE FOUND YOUR INPUT IN OUR SYSTEM";
}

?>
<form name="form1" method="post">
<h1>Task2 by sameer khan</h1>
<p>Input value here:<input type="text" name="textarray" placeholder="Enter only digits" " ></p>
<p><input type="submit" name="btnsubmit"></p>
</form>
</body>
</html>