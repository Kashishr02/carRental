<?php
        if(isset($_SESSION['loggedin']) && $_SEESION['loggedin'] == true){
          $loggedin = true;
        }else{
          $loggedin = false;
        }
        ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Car Rental</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
       <?php if($loggedin){
 echo "<button class='btn btn-outline-success mx-2'><a class='nav-link' href='logout.php'>Log Out</a></button>";
       }else{
    echo "<div class='btn-group'>
      <button type='button' class='btn btn-outline-success dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
       SignUp
      </button>
      <ul class='dropdown-menu'>
        <li><a class='dropdown-item' href='signup.php'>Customer's SignUp</a></li>
        <li><a class='dropdown-item' href='agencySignup.php'>Car rental agencies's SignUp</a></li>
    </ul>
  </div>
  <div class='btn-group'>
  <button type='button' class='btn btn-outline-success dropdown-toggle ' data-bs-toggle='dropdown' aria-expanded='false'>
    Login
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='login.php'>Customer's Login</a></li>
    <li><a class='dropdown-item' href='agencyLogin.php'>Car rental agencies's Login</a></li>
</ul>
</div>";
       }?>
      </form>
    </div>
  </div>
</nav>