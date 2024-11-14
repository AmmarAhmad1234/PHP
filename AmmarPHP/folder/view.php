<?php

    require "connection.php";


    $viewquery = "SELECT * FROM products";
    $result = mysqli_query($connection, $viewquery);




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
    <h1 class="text-center mt-2">VIEW PRODUCTS!</h1>

    <div class="container">  
        <div class="row g-5">
   

        <?php
            foreach($result as $row) {
        ?>






    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $row ['prod_name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $row ['prod_price'] ?></h6>
            <p class="card-text"><?= $row ['prod_desc'] ?></p>
               <a href="delete.php?delId=<?= $row ['prod_id']?>"><button class="btn btn-danger">Delete</button></a> 
               <a href="update.php?upId=<?= $row ['prod_id']?>"><button class="btn btn-warning">Update</button></a> 
        </div>
    </div>


<?php
    }
?>

    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>