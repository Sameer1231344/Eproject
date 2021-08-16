<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


	<title></title>
</head>
<body>
   <div id="myDiv" class="table-responsive">

   </div>
   <script type="text/javascript">
   	$(document).ready(function(){

    $('#btn').click(function(){
     
      $.ajax({
      
       type:"GET",
       url:"fetch.php",
       success:function(result){
       	$('#myDiv').html(result);
       }

      });
    
    });


   	});

   </script>


   <form>
   	 <p><input type="button"id="btn" name="btn" value="Click here!" /></p>
   </form>
</body>
</html>