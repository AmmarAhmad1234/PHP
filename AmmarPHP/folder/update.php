<?php

require "connection.php";


// include('connetion.php');


$upId = $_GET['upId'];

    $upQuery = "SELECT * FROM products WHERE prod_id = '$upId'";
    $upResult = mysqli_query($connection, $upQuery);

    $upData = mysqli_fetch_assoc($upResult);

    // echo $upId;


    // echo "<pre>";
    // print_r($upData);
    // echo "</pre>";

if (isset($_POST['btn'])) {

    $prodName =  $_POST['prodName'];
    $prodPrice = $_POST['prodPrice'];
    $prodDesc = $_POST['prodDesc'];

    // echo '<br>' . $prodName . '<br>' . $prodPrice . '<br>' . $prodDesc;


 


    
    $UpdateQuery = "UPDATE products SET prod_name = '$prodName', prod_price = '$prodPrice', prod_desc = '$prodDesc' WHERE prod_id = '$upId'";

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

    <form action="" method="post">

        Prdouct Name: <input type="text" name="prodName" value="<?= $upData['prod_name'] ?>"> <br>
        Prdouct Price: <input type="text" name="prodPrice"  value="<?= $upData['prod_price'] ?>" class="mt-3"> <br>
        Prdouct Description: <input type="text" name="prodDesc"  value="<?= $upData['prod_desc'] ?>" class="mt-3"> <br>
        <input type="submit" value="submit" name="btn" class="mt-2">

    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>