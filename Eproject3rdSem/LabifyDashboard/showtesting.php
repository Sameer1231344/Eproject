<!DOCTYPE html>
<html lang="en">
<?php
include('Connect.php');
include('header.php')?>
<?php
$q='select * from testing t JOIN departments d ON t.DepartmentID=d.DepartmentID';
$rows=mysqli_query($con,$q);
?>
<body class="bg-theme bg-theme11">

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
      


        
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Testing Table</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    <th scope="col">No:</th>
                      <th scope="col">Department</th>
                      <th scope="col">Test's</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $counter=1;
                  while ($data=mysqli_fetch_assoc($rows)) {
                    
                  ?>
                    <tr>
                    <td scope="row"><?php echo $counter++ ?></td>
                      <td scope="row"><?php echo $data['DepartmentName']?></td>
                      <td scope="row"><?php echo $data['TestName']?></td>
                      <td scope="row"><a href="Testingupdate.php?eyeD=<?php echo $data['TestID']?>"><img src="assets\images\edit.gif" height="70"/></a></td>
                      <td scope="row"><a href="Testingdelete.php?eyeD=<?php echo $data['TestID']?>"><img src="assets\images\deletebin.gif"height="70"/></a></td>
                    </tr>
                  <?php } ?>
                   
                  </tbody>
                </table>
              </div>
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
