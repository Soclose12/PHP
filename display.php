<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD PHP</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add student</a></button>
      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">SecName</th>
      <th scope="col">Addres</th>
      <th scope="col">Op</th>
    </tr>
  </thead>
  <tbody>


<?php



$sql="Select * from `crud` ";
$result=mysqli_query($con,$sql);
if($result){
   while($row=mysqli_fetch_assoc($result)){
      $id=$row['ID'];
      $name=$row['name'];
      $sname=$row['sname'];
      $addres=$row['addres'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$sname.'</td>
      <td>'.$addres.'</td>
      <td>
   <button class=" btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light" >Up</a></button>
   <button class=" btn btn-danger "><a href="delete.php?deleteid='.$id.'" class="text-light">Del</a></button>
</td>
    </tr>';
   };
   
}




?>




</table>
   </div>
</body>
</html>