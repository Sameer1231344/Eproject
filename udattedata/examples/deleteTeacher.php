<?php
include('connection.php');
$id=$_GET['EYEd'];
$Q="DELETE FROM `teacher` WHERE TeacherId='$id'";
$RUN=mysqli_query($con,$Q);
if($RUN){
    ECHO "<script> alert('deleted');window.location.href='showTeacher.php' </script>";
}
else{
    ECHO mysqli_error($con);
}
?>