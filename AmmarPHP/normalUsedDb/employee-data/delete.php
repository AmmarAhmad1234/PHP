<?php

    require 'connection.php';

    $delId = $_GET['delId'];
    $delteQuery = "DELETE FROM employee WHERE employee_id = '$delId'";
    $result = mysqli_query($connection, $delteQuery);

    header("location: view.php");

?>