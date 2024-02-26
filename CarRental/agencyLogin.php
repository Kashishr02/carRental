<?php
$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "partials/_dbconnect.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
   
    $sql2 = "SELECT * FROM `agencies` WHERE Agency_email='$email' AND password='$password'";
    $result2 = mysqli_query($conn, $sql2);
    $num = mysqli_num_rows($result2);
    if($num == 1){
        while($row = mysqli_fetch_assoc($rsult2)){
            if(password_verify($password, $row['password'])){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: cae_rental.php");
            }
    }else{
$showerror = true;
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
     if($login){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Login Successfully</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($showerror){
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Wrong email or password.</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
     <div class="container col-4 my-4">
            <h2 class="text-center mb-4">Login As A Agency</h2>
            <form action="/CarRental/agencyLogin.php" method="POST">
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary col-6">Login</button>
                </div>
                <div class="d-flex flex-row my-2 ">
                   Don't have an account? <a href="agencySignup.php">SignUp</a>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>