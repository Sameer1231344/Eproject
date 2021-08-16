<!DOCTYPE html>
<html lang="en">
<?php 
include('header.php');
include('Connect.php');
$id=$_GET['eyeD'];
 $q="select * from users where UserID='$id'";
 $rows=mysqli_query($con,$q);
 $data=mysqli_fetch_assoc($rows);
 $q2="select * from roles  ";
 $rows2=mysqli_query($con,$q2);
 $data=mysqli_fetch_assoc($rows2);
?>
<body class="bg-theme bg-theme11" >

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">User's Form</div>
           <hr>
            <form action="" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-6">User Role</label>
            <select type="text" class="form-control form-control-rounded" id="input-7" >
            <?php while ($data=mysqli_fetch_assoc($rows2)) {?>
            <option><?php echo $data['RoleName']?></option>
           <?php }?>
          </select>
           </div>
           <div class="form-group">
            <label for="input-7">User Name</label>
            <input type="text" value="<?php echo $data['RoleName']; ?>" class="form-control form-control-rounded" id="input-7" name="usr_n" placeholder="Enter User Name">
           </div> 
           <div class="form-group">
            <label for="input-7">User Contact</label>
            <input type="int"  value="<?php echo $data['RoleName']; ?>" class="form-control form-control-rounded" name="usr_con" id="input-7" placeholder="Enter User Contact">
           </div> 
           <div class="form-group">
            <label for="input-7">User Email</label>
            <input type="text" value="<?php echo $data['RoleName']; ?>"  class="form-control form-control-rounded" name="usr_em" id="input-7" placeholder="Enter User Email Address">
           </div> 
           <div class="form-group">
            <label for="input-7">User Password</label>
            <input type="password" value="<?php echo $data['RoleName']; ?>"  class="form-control form-control-rounded" id="input-7" name="usr_pas" placeholder="Enter User password">
           </div> 
           <div class="form-group">
            <label for="input-9">User Image</label>
            <input type="file" value="<?php echo $data['RoleName']; ?>" class="form-control form-control-rounded" name="usr_img" onchange="readURL(this)" height="50" >
            <img id="Teacherimg">
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5" name="usr_up"><i class="icon-lock"></i>Update</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
    
	
</body>
</html>
<script>
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader =new FileReader();
      reader.onload= function(e){
        $('#Userimg')
        .attr('src',e.target.result)
        .width(250)
        .height(250)
        .css("visibility","visible");
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>


<?php
include('Connect.php');
if(isset($_POST['usr_up']))
{
  $u_name=$_POST['usr_n'];
  $u_cont=$_POST['usr_con'];
  $u_email=$_POST['usr_em'];
  $u_pass=$_POST['usr_pas'];
  $image = $_FILES['usr_img']['name'];
  $imgtn = $_FILES['usr_img']['tmp_name'];
  $imgty = $_FILES['usr_img']['type'];
  $imgsi =$_FILES['usr_img']['size'];
  $folder ="assets/images/UserImages/";
  if ($imgty=="image/png" || $imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg" || $imgty=="image/jfif" ) {
      if ($imgsi<=1000000) {
          $path =$folder.$image;
         $imgq="UPDATE SET `user`(`UserName`,`UserContatct`,`UserEmail`,`UserPassword`, `UserImage`,) VALUES ('$u_name','$u_cont','$u_email','$u_pass','$path')";
         $result =mysqli_query($con,$imgq);
         move_uploaded_file($imgtn,$path);
         if ($result) {
            echo"<script> alert('New User Added '); window.location.href='showusers.php' </script>";
         }
         else{
             echo mysqli_error($con);
         }  
         }
         else{
            echo"<script> alert('The picture you choose its too large');  </script>";
        }
  }
  else{
    echo"<script> alert('Wrong format'); window.location.href='showusers.php' </script>";
}

}

?>