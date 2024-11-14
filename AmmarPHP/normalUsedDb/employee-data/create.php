<?php

    require ("connection.php");

    if (isset($_POST['btn'])){
        $Em_Name = $_POST ['Em_Name'];
        $Em_Salary = $_POST ['Em_Salary'];
        $Em_Designation = $_POST ['Em_Designation'];


        echo "<br>".$Em_Name. "<br>" .$Em_Salary. "<br>" .$Em_Designation. "<br>";



        $createQuery = "INSERT INTO employee(employee_name, employee_salary, employee_designation) VALUES('$Em_Name', '$Em_Salary', '$Em_Designation')";
        $result = mysqli_query($connection, $createQuery);

        if($result){
          echo "<br> Data insert Succesfully";
        }
        else{
          echo "<br> Data insert Failed";
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
    <h1 class="text-center mt-2">ADD EMPLOYEE DATA!</h1>

    <form action="" method="post" >
        
        Employee Name: <input type="text" name="Em_Name"> <br>
        Employee salary: <input type="text" name="Em_Salary"  class="mt-3"> <br>
        Employee Designation: <input type="text" name="Em_Designation"  class="mt-3"> <br> 
        <input type="submit" value="submit" name="btn" class="mt-2" >
        
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>