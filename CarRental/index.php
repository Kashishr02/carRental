<?php
$car_show = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
  require "partials/_dbconnect.php";
  $model = $_POST["c_model"];
  $number = $_POST["c_number"];
  $seats = $_POST["c_seats"];
  $rent = $_POST["c_rent"];
  $days = $_POST["c_days"];
  $image = $_POST["c_image"];

  $car_sql ="INSERT INTO `car_details` (`car_model`,`car_number`,`car_seats`, `car_rent`, `car_days`,`car_image`) VALUES ('$model', '$number', '$seats', '$rent', '$days', '$image')";
  $car_result = mysqli_query($conn, $car_sql);
  if($car_result){
    $car_show = true;
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
    
    <div class="container">
    <div class="card my-5" style="width: 18rem;">
  <img src="<?php$image;?>" class="card-img-top" alt="car image">
  <div class="card-body">
    <h5 class="card-title">Car Details</h5>
    <p class="card-text">
      <ul>
        <li><strong>Car Model - </strong><?php$modal;?></li>
        <li><strong>Car Number - </strong><?php$number;?></li>
        <li><strong>Seats Available - </strong><?php$seats;?></li>
        <li><strong>Rent Per Day - </strong><?php$rent;?></li>
        <li><strong>Days For Rent - </strong><?php$days;?></li>
      </ul>
    </p>
    <p >
      <label for="start_date">Start Date </label>
      <input type="date" name="start_date" id="start_date" disabled>
    </p>
    <a href="login.php" class="btn btn-success">Rent</a>
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>