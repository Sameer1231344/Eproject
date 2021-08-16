<?php
            
            include('Header.php');
            include('connection.php');
            $id=$_GET['EYEd'];
            $q="select * from teacher where TeacherId='$id'";
            $exc=mysqli_query($con,$q);
            $data=mysqli_fetch_assoc($exc);
            
            ?>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Teacher Info</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST"> 
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Teacher Name</label>
                                                <input value="<?php echo $data['TeacherName']; ?>" type="text" name="t_name" class="form-control" placeholder="Company" value="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Teacher Contact</label>
                                                <input value="<?php echo $data['Tcontact']; ?>" type="text" name="t_con"  class="form-control" placeholder="Home Address" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Teacher Sallary</label>
                                                <input value="<?php echo $data['Salary']; ?>"  type="text" name="t_sal" class="form-control" placeholder="City" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Qualification</label>
                                                <input value="<?php echo $data['Qualification']; ?>" type="text" name="t_qual" class="form-control" placeholder="Country" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" name="t_btn" class="form-control" placeholder="Country" value="Update">
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <?php
            
            include('Footer.php');
           
           ?>

</html>


<?php
include('connection.php');

if(isset($_POST['t_btn']))
{
    $name=$_POST['t_name'];
    $cont=$_POST['t_con'];
    $sal=$_POST['t_sal'];
    $qual=$_POST['t_qual'];

 //   $q="INSERT INTO `teacher`( `TeacherName`, `Tcontact`, `Salary`, `Qualification`) VALUES ('$name','$cont','$sal','$qual')";

$q="Update teacher set TeacherName='$name',Tcontact='$cont',Salary='$sal',Qualification='$qual' where TeacherId='$id'";
 $run=mysqli_query($con,$q);
if($run)
{
    echo "<script> alert('Updated');window.location.href='Showteacher.php' </script>";
}
else{
        echo "<script> alert('failed') </script>";
    }
}



?>
