<?php

    require "connection.php";

    $delId = $_GET['delId'];



    $deleteQuery = "DELETE FROM products WHERE prod_id = '$delId'" ;
    
    

    $result = mysqli_query($connection, $deleteQuery);
    
    header('location: view.php');


?>