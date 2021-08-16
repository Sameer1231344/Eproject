<?php
 
   include('connect.php');
   $q='select * from student';
   $res=mysqli_query($conn,$q);
   $output='';
   $output.='<table border="2" cellpadding="50">';
   $output.='<tr>';
   $output.='<th>Student ID</th>';
   $output.='<th>Student Name</th>';
   $output.='<th>Student Marks</th>';
   $output.='<th>Student Contact</th>';
   $output.='<th>Current Semester</th>';
   $output.='</tr>';


   while ($row=mysqli_fetch_array($res)){
   	$output.='<tr>';
   	$output.='<td>'.$row['Student_Id'].'</td>';
   	$output.='<td>'.$row['Student_Name'].'</td>';
   	$output.='<td>'.$row['Student_Marks'].'</td>';
   	$output.='<td>'.$row['Student_Contact'].'</td>';
   	$output.='<td>'.$row['Current_Semester'].'</td>';

   }
   $output.='</table>';
   echo $output;





























?>