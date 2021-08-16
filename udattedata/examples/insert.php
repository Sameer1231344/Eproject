
<?php
include('connection.php');
if(isset($_POST['t_btn'])){
  
    $tname=$_POST['t_name'];
    $tcon=$_POST['t_con'];
    $tsal=$_POST['t_sal'];
    $tq=$_POST['t_qual'];
    $q="INSERT INTO `teacher`(`TeacherName`, `Tcontact`, `Salary`, `Qualification`) VALUES ('$tname','$tcon','$tsal','$tq')";
    $run=mysqli_query($con,$q);
    if($run){
    
        echo "<script> alert('inserted') </script>";
    }
    else{

        echo mysqli_error($con);
    }
}

?>