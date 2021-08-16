<?php
include('Connect.php');
if(isset($_POST['test_submit']))
{
    $tst=$_POST['test_name'];
    $q="INSERT INTO `Testing`(`TestName`) VALUES ('$tst')";
    $run=mysqli_query($con,$q);
    if($run){
    
        echo"<script> alert('New Test is Added Succesfully'); window.location.href='showtesting.php' </script>";
    }
    else{

        echo mysqli_error($con);
    }
}

?>