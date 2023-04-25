+<?php 
    session_start();
    if(!isset($_SESSION['User_name'])){
            header("Location: index.php");
    }
    include "connect_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php include "head.php"; ?>
</head>
<body>
    <div class="container">
        <div class="main">
          <nav class="navbar navbar-expand-lg ">

    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="./index.php" class="navbar-brand">
      <img src="./images/logo.png" alt="icon" style="width: 100px;">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <button type="button" class="btn btn-outline-dark ">
          <a href="./contact.php" target="blank" class="nav-link">Contact</a>
        </button>
          <button type="button" class="btn btn-outline-dark ">
          <a href="profile.php" target="blank" class="nav-link">Profile</a>
        </button>

        <button type="button" class="btn btn-outline-dark">
          <a href="#cta" class="nav-link">Download</a>
        </button>
        <button type="button" class="btn btn-outline-dark">
          <a href="./Product_Page.php" class="nav-link">Content</a></button>
        </li>
      </ul>
    </div>

  </nav>
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body" id="first">
                            <img src="images\profile-icon.png" class="rounded-circle" alt="profile-picture" width="150">
                            <div class="mt-3">
                                <h3 style="color: white;"><?php echo $_SESSION['name'] ?></h3>
                                <a href="index.php">Home</a>
                                <a href="contact.php">Support</a>
                                <a href="profile.php">Setting</a>

                                <a href="log-out.php">Signout</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt">About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Name</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                   <?php
                                   
                                   echo $_SESSION['name'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $_SESSION['email'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>UserName</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $_SESSION['User_name']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Date Of Birth</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $_SESSION['birthday']; ?>
                                </div>
                            </div>
                        </dir>
                    </div>
                    <div class="card mb-3 content">
                        <h1 class="m-3">Recent Avtivites</h1>
                            <div class="row">
                                <?php

                                    $sql = "SELECT * FROM car WHERE ID = ' ". $_COOKIE["Last_viewed_car"] . "' LIMIT 1";
                                    $result = mysqli_query($db , $sql);
                                    $row = mysqli_fetch_assoc($result);

                                        ?>
                                <div class="col-md-9 text secondary" style="margin: auto auto 10px 30px">
                                
                              <a href = " <?php echo " cars.php?Id=".$_COOKIE["Last_viewed_car"] ?> ">
                                <div class="card__body">
                      <div class="card__body-cover">
                        <img src="<?php echo $row['photo']?>" style = "width :233px"alt="">
                      </div>
                      <header class="card__body-header">
                        <p class="card__body-header-subtitle"><?php echo $row['Name'] ?></p>
                      </header>
                      <h2><?php echo $row['Price'] ?>$</h2>
                    </div>
                     </a>


                                    <br/>
                                    <a class="btn" href="">Last Viewed car</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>