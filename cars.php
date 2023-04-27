<?php

include "Functions.php";
check_login($db)

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "head.php"; ?>
        <link rel="stylesheet" href="css/cars.css">
        <title>Qmotors</title>
    </head>
    <body>

        <?php include "navbar.php"; ?>
        <!--content-->
        <?php
            $Car_Id =  $_GET['Id'];
            setcookie("Last_viewed_car" , $Car_Id , time() + 3600);
            $sql = "SELECT * FROM car WHERE Id = '$Car_Id'";
            $result = mysqli_query($db , $sql);
            $row = mysqli_fetch_assoc($result);
            
            echo "
            <section id='content-image'>
            <div class='row' style='color:white ; '>
                <div class='col-lg-6'>
                    <img class='img-section' src='". $row['photo'] ."' alt=''>
                </div>
                <div class='col-lg-6' style='text-align: left;' >
                    <h1 >" . $row['Name'] . "</h1>
                    <h3>Starting at ". $row['Price'] ."$</h3>
                </div>
                <p>". $row['Description'] . " </p>
                <h3>Car Video : </h3>
                 " . $row['Video'] ."
            </div>
        </section>
            
            
            ";

        ?>
     
        
        <div  id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-keyboard="true" style='background-color:#ffffff47' >
  
        <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="testimonial-image img-section col-lg-2" src="<?php echo $row['photo']; ?>" style="width:50%">
            <div class="text"><h4><?php echo $row['Name'] ?></h4></div> 
        </div>
    <div class="carousel-item">
    <img class="testimonial-image img-section" src="<?php echo $row['photo2'];  ?>" style="width:50%">
            <div class="text"><h4><?php echo $row['Name'] ?></h4></div> </div>
    <div class="carousel-item">
    <img class="testimonial-image img-section" src="<?php echo $row['photo3']; ?>" style="width:50%">
            <div class="text"><h4><?php echo $row['Name'] ?></h4></div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
    <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        <?php include "cta+footer.php"; ?>
    </body>

</html>
