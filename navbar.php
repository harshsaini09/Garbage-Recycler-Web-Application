<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <script src="https://kit.fontawesome.com/8e09a5574a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Name</title>
</head>
<body>
<link rel="stylesheet" href="Style/style.css">
<nav class="navbar navbar-expand-lg navbar-light bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Style\Resources\Logo.png" height="60" alt="..."></a>
      <a class="nav-link" href="index.php">BYE BYE JUNK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="features.php">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">Orders</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="book.php">Book a appintment</a></li>
              <?php 
              if(!isset($_SESSION['uid']))
              {
                echo "<li><a class='dropdown-item' href='#'>Your appintment</a></li>";
              }
              ?>
              <li><hr class="dropdown-divider"></li>
            <?php
            if((isset($_SESSION['uid']) && !empty($_SESSION['uid'])) || (isset($_SESSION['jid']) && !empty($_SESSION['jid'])))
            {
              echo "<li><a class='dropdown-item' href='settings.php'>Settings</a></li>";
            }
            ?>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              Language
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="#" style="text-decoration: none;"><li><button class="dropdown-item" type="button">English</button></li></a>
              <a href="Hindi/" style="text-decoration: none;"><li><button class="dropdown-item" type="button">Hindi</button></li></a>
            </ul>
          </div>
        <?php
            if((!isset($_SESSION['uid']) || empty($_SESSION['uid'])) && (!isset($_SESSION['jid']) || empty($_SESSION['jid'])))
            {
                echo "<a href='log_in.php' class='btn btn-outline-success ms-5'>Log In</a>
                <a href='sign_up.php' class='btn btn-outline-success ms-5'>Sign Up</a>";  
            }
            else
            {
                if(isset($_SESSION['uid']))
                {
                  $sid = number_format($_SESSION['uid']);
                }
                else 
                {
                  $sid = number_format($_SESSION['jid']);
                }
                $conn = mysqli_connect ('localhost','root','','garbage_db');
                $sql = "select * from users  where id=$sid";
                $result=mysqli_fetch_row(mysqli_query($conn, $sql));
                echo "<div class = 'greet'>Welcome $result[1]</div>";
                echo "<a href='logout.php' class='btn btn-outline-danger ms-5' ><div>Logout</div></a>";
            }
        ?>
        </form>
      </div>
    </div>
  </nav>
<script>
  let x = window.location.pathname;
  x = x.split('/');
  if(x[2]=='about_us.php')
  {
    document.querySelector("link").href="Style/about_us.css";
  }
  else if(x[2]=='features.php')
  {
    document.querySelector("link").href="Style/features.css";
  }
  else if(x[2]=='book.php')
  {
    document.querySelector("link").href="Style/book_style.css";
  }
  else if(x[2]=='sell.php')
  {
    document.querySelector("link").href="Style/sell.css";
  }
  else if(x[2]=='cart.php')
  {
    document.querySelector("link").href="Style/cart.css";
  }
  else if(x[2]=='junkorder.php')
  {
    document.querySelector("link").href="Style/junkorders.css";
  }
</script>