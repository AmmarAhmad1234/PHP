<?php

require "connection.php";


// include('connetion.php');


$upId = $_GET['upId'];

    $upQuery = "SELECT * FROM employee WHERE employee_id = '$upId'";
    $upResult = mysqli_query($connection, $upQuery);

    $upData = mysqli_fetch_assoc($upResult);

    // echo $upId;


    // echo "<pre>";
    // print_r($upData);
    // echo "</pre>";

if (isset($_POST['btn'])) {

    $Em_Name =  $_POST['Em_Name'];
    $Em_salary = $_POST['Em_salary'];
    $Em_designation = $_POST['Em_designation'];

    // echo '<br>' . $prodName . '<br>' . $prodPrice . '<br>' . $prodDesc;


 


    
    $UpdateQuery = "UPDATE employee SET employee_name = '$Em_Name', employee_salary = '$Em_salary', employee_designation = '$Em_designation ' WHERE employee_id = '$upId'";

    $result = mysqli_query($connection, $UpdateQuery);

    if ($result) {
        header("location: view.php");
    } else {
        echo "<br> Data insert failed";
    }
}










?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center mt-2">UPDATE PRODUCTS!</h1>

    <div class="container">
        <div class="row"> 
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Employee Salary</th>
      <th scope="col">Employee Designation</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

    <tr>
      <td><?= $upData['employee_id']?></td>
      <td><?= $upData['employee_name']?></td>
      <td><?= $upData['employee_salary']?></td>
      <td><?= $upData['employee_designation']?></td>
      <td>
      <a class="btn btn-danger" href="delete.php?delId=<?= $upData ['employee_id']?>">Delete</a> 
      <a class="btn btn-warning" href="update.php?upId=<?= $upData ['employee_id']?>">update</a> 

      </td>
    </tr>

   
  </tbody>
</table>
    







</div>
</div>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>