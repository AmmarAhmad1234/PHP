<?php

    require "connection/connection.php";
    $delId = $_GET['delId'];
    $deleteQuery = "DELETE FROM pdo_users WHERE userId = :delId"; 

    $deleteprepare = $conn->prepare($deleteQuery);

    $deleteprepare ->bindParam(':delId', $delId, PDO::PARAM_INT);




    if($deleteprepare -> execute()) {
        header("location: view.php");
    }
    else{
        echo "delection failed";
    }
?>