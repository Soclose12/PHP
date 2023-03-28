<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $sname=$_POST['sname'];
  $addres=$_POST['addres'];

  $sql="insert into `crud`(name,sname,addres) 
  values('$name','$sname','$addres')";
  $result=mysqli_query($con,$sql);
  if($result){
   // echo"data in suc";
   header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD PHP</title>
  </head>
  <body>
<div class="conteiner my-5">
<form method="post" >
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplite="off">
</div>
<div class="form-group">
    <label >Second Name</label>
    <input type="text" class="form-control"  placeholder="Enter your second name" name="sname" autocomplite="off">
</div>
<div class="form-group">
    <label >Addres</label>
    <input type="text" class="form-control"  placeholder="Enter your Addres" name="addres" autocomplite="off">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

  </body>
</html>