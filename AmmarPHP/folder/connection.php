<?php

    try
    {
        $connection = mysqli_connect('localhost', 'root', '', 'ammar');
        echo "connected successfully";
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }

?>