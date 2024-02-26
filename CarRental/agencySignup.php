<?php
$showalert = false;
$showerror = false;
$emailexist = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "partials/_dbconnect.php";
    $name = $_POST["Aname"];
    $email = $_POST["Aemail"];
    $phone = $_POST["Aphone"];
    $password = $_POST["Apassword"];
    $cpassword = $_POST["Acpassword"];
    $exist = false;
    $existsql ="SELECT * FROM `agencies` WHERE Agency_email='$email'";
    $existResult = mysqli_query($conn, $existsql);
    $numExistRow = mysqli_num_rows($existResult);
    if($numExistRow > 0){
       $emailexist = true;
    }
    else{
if(($password == $cpassword)&& ($exist == false)){
  $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql ="INSERT INTO `agencies` (`Agency_name`, `Agency_email`,`Agency_phone`, `password`) VALUES ('$name', '$email','$phone', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
$showalert = true;
header("location: agencyLogin.php");
    }else{
$showerror = true;
    }
}
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php require "partials/_nav.php"?>
    <?php 
    if($showalert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>SignUp Successfully</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    
    if($showerror){
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Something is went worng. Please try again.</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($emailexist){
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Email Already Exist.</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
    <div class="container col-4 my-4">
            <h2 class="text-center mb-4">SignUp As A SignUp</h2>
            <form action="/CarRental/agencySignup.php" method="POST">
                <div class="row mb-3">
                    <label for="Aname" class="col-sm-2 col-form-label">Agency's Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Aname" name="Aname">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Aemail" class="col-sm-2 col-form-label">Agency's Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="Aemail" name="Aemail">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Aphone" class="col-sm-2 col-form-label">Agency's Phone No</label>
                    <div class="col-sm-10">
                    <input type="tel" class="form-control" id="Aphone" name="Aphone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Apassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="Apassword" name="Apassword">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Acpassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="Acpassword" name="Acpassword">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary col-6">SignUp</button>
                </div>
                <div class="d-flex flex-row my-2 ">
                  Already have an account? <a href="agencyLogin.php">Login</a>
                </div>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>