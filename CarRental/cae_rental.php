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
        <h2>Car Details</h2>
    <form action="index.php" method="POST">
  <div class="row mb-3">
    <label for="c_model" class="col-sm-2 col-form-label">Car Model</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="c_model" name="c_model">
    </div>
  </div>
  <div class="row mb-3">
    <label for="c_number" class="col-sm-2 col-form-label">Car Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="c_number" name="c_number">
    </div>
  </div>
  <div class="col-md-4">
    <label for="c_seats" class="form-label">Seats Capacity</label>
    <select id="c_seats" name="c_seats" class="form-select">
      <option selected>4</option>
      <option>5</option>
      <option>6</option>
    </select>
  </div>
  <div class="row mb-3">
    <label for="c_rent" class="col-sm-2 col-form-label">Rent Per Day</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="c_rent" name="c_rent">
    </div>
  </div>
  <div class="col-md-4">
    <label for="c_days" class="form-label">Days For Rent</label>
    <select id="c_days" name="c_days" class="form-select">
      <option selected>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  <div class="row mb-3">
    <label for="c_image" class="col-sm-2 col-form-label">Image of the Car</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="c_image" name="c_image" accept="image/png, image/jpeg">
    </div>
  </div>
<button type="submit" class="btn btn-primary my-2">Submit Details</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>