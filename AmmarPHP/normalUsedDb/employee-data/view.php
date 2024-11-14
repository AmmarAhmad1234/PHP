<?php

    require 'connection.php';

    $viewQuery = "SELECT * FROM employee";
    $result = mysqli_query($connection, $viewQuery);


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

    <center><h1>VIEW EMPLOYEE DATA</h1><center>



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
  <?php
    foreach($result as $row){
    ?>
    <tr>
      <td><?= $row['employee_id']?></td>
      <td><?= $row['employee_name']?></td>
      <td><?= $row['employee_salary']?></td>
      <td><?= $row['employee_designation']?></td>
      <td>
      <a class="btn btn-danger" href="delete.php?delId=<?= $row ['employee_id']?>">Delete</a> 
      <a class="btn btn-warning" href="update.php?upId=<?= $row ['employee_id']?>">update</a> 

      </td>
    </tr>
    <?php
    }
    ?>
   
  </tbody>
</table>
    







</div>
</div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>