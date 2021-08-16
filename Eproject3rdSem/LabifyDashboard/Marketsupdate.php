<!DOCTYPE html>
<html lang="en">
<?php 
include('Connect.php');
include('header.php');
$id=$_GET['eyeD'];
 $q="select * from Markets where MarketID='$id'";
 $rows=mysqli_query($con,$q);
 $data=mysqli_fetch_assoc($rows);
?>


<body class="bg-theme bg-theme11" >

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Market's Form</div>
           <hr>
            <form action="" method="POST">
           <div class="form-group">
            <label for="input-7">Market Name</label>
            <input type="int" class="form-control form-control-rounded"  value="<?php echo $data['MarketName']; ?>" name="market" id="input-2" placeholder="Enter Market">
           </div>
            <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"  name="mrk_up"><i class="icon-lock"></i>Add</button>
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
<?php

include('Connect.php');
if(isset($_POST['mrk_up']))
{
 $mark=$_POST['market'];
  $q="Update Markets SET MarketName='$mark'where MarketID='$id'";
  $run=mysqli_query($con,$q);
    if($run){

        echo"<script> alert('Record is Succesfully Updated'); window.location.href='showmarket.php' </script>";
    }

    else{

        echo"<script> alert('Failed') </script>";
    }
}

?>
