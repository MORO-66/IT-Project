<?php
    session_start();
    if(!isset($_SESSION['User_name'])){
            header("Location: index.php");
    }
    include "connect_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
    <title>User's profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body" id="first">
                            <img src="images\profile-icon.png" class="rounded-circle" alt="profile-picture" width="150">
                            <div class="mt-3">
                                <h3 style="color: white;"><?php echo $_SESSION['name'] ?></h3>
                                <a href="index.php">Home</a>
                                <a href="contact.php">Support</a>
                                <a href="feedback-list.php"><?php echo $_SESSION['User_name']=="admin"?"All":"My" ?> Reviews</a>

                                <a href="Log-out.php">Signout</a>

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
                            <dsiv class="col-md-9 text secondary" style="margin: auto auto 10px 30px">
                                <?php

                                    
                                   
                                        if(isset($_COOKIE['Last_viewed_car'])){

                                            $sql = "SELECT * FROM car WHERE ID = ' ". $_COOKIE["Last_viewed_car"] . "' LIMIT 1";
                                            $result = mysqli_query($db , $sql);
                                            $row = mysqli_fetch_assoc($result);


                                            echo "

                                            <a href = 'cars.php?Id=". $_COOKIE["Last_viewed_car"] . " '>
                                            <div class='card__body'>
                                  <div class='card__body-cover'>
                                    <img src='". $row['photo']."' style = 'width :233px'alt=''>
                                  </div>
                                  <header class='card__body-header'>
                                    <p class='card__body-header-subtitle'>".$row['Name']."</p>
                                  </header>
                                  <h2>" . $row['Price'] ."$</h2>
                                </div>
                                 </a>   ";

                                        }

                                        ?>


                            <br/>
                                    <a class="btn" href="">Last Viewed car</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include "cta+footer.php"; ?>
</body>
</html>
