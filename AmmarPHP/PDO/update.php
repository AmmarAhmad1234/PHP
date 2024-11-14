<?php

require "connection/connection.php";

$upId = $_GET['upId'];

$upQuery = "SELECT * FROM pdo_users WHERE userId = :Id";

$viewprepare = $conn->prepare($upQuery);
$viewprepare ->bindParam(':Id', $upId, PDO::PARAM_INT);
$viewprepare -> execute();

$viewData = $viewprepare->fetchAll(PDO::FETCH_ASSOC);



// echo "<pre>";
// print_r($viewData);
// echo "</pre>";


$viewData = $viewData[0];



if(isset($_POST['btn'])){

    $userName  = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];

    $userImage = $_FILES['userImage'];

    if($userImage ['size'] > 5000000){
        echo "<script>alert('your image is too big')</script>";
    }
    else{
        $extenshion = explode(".", $userImage['name']);
        echo "extenshion";
        $extenshion = $extenshion[1];
        $imageUniqueName = uniqid();
        $imageName = $imageUniqueName . "." . $extenshion;
        move_uploaded_file($userImage['tmp_name'],"images/". $imageName);
       $image = empty($userImage['name']) ? $viewData["userImage"] : $imageName;


$upId = $_GET['upId'];
    $UpdateQuery = "UPDATE pdo_users SET username = :username, email = :email, password = :pass, city = :city, userImage = :userImage WHERE userId = :userId";
    
    $Updateprepare = $conn->prepare($UpdateQuery);

    $Updateprepare ->bindParam('username',$userName, PDO::PARAM_STR);
    $Updateprepare ->bindParam('email',$email, PDO::PARAM_STR);
    $Updateprepare ->bindParam('pass',$password, PDO::PARAM_STR);
    $Updateprepare ->bindParam('city',$city, PDO::PARAM_STR);
    $Updateprepare ->bindParam(':userImage', $image, PDO::PARAM_STR);
    $Updateprepare ->bindParam(':userId', $upId, PDO::PARAM_INT);


   if($Updateprepare -> execute()){
    header("location: view.php");
   }
   else{
    echo "update failed";
   }



}
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDO CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">User Update Form!</h1>
    <div class="container">
        <div class="row">
            <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Username</label>
                    <input type="text" class="form-control" name="userName" value="<?= $viewData['username'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"  value="<?= $viewData['email'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"  value="<?= $viewData['password'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="city"  value="<?= $viewData['city'] ?>">
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">user Image</label>
                    <input type="file" class="form-control" name="userImage">
                    <img width="100px" src="images/<?= $viewData['userImage'] ?>" alt="" srcset="">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btn">Update User</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>