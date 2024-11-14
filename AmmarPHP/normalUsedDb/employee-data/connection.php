<?php


    try{
        $connection = mysqli_connect("localhost","root","","ammar");
        echo 'connected';
    
    }
    catch(Exception $e)
    {
        echo $e;
    }
