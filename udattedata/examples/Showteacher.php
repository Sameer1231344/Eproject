<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<?php
include('connection.php');
$q="select * from teacher";
$rows=mysqli_query($con,$q);

?>



<body>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">Salary</th>
    <th scope="col">Contact</th>
    <th scope="col">Qualification</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
<?php while($data=mysqli_fetch_assoc($rows)) { ?>
    <tr>
      <td><?php echo $data['TeacherName']; ?></td>
      <td><?php echo $data['Salary']; ?></td>
      <td><?php echo $data['Tcontact']; ?></td>
      <td><?php echo $data['Qualification']; ?></td>
      <td><a href="TeacherUpdate.php?EYEd=<?php echo $data['TeacherId'] ?>"><img src="edit.png"></td>
      <td><a href="deleteTeacher.php?EYEd=<?php echo $data['TeacherId'] ?>"><img src="bin.png"></a></td>
    </tr>
<?php } ?>

  </tbody>
</table>
</body>