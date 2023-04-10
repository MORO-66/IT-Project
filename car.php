<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "head.php"; ?>
        <title>Qmotors</title>
    </head>
    <body>

        <?php include "navbar.php"; ?>
        <!--content-->

        <section id="content-image">
        <div class="row">   
            <div class="col-lg-5">
            <img class="img-section" src="./images/bmw.jpg" alt="">
            </div>
        <div class="col-lg-5" >
            <h4 class="text-dark">Car model:</h4>
            <h4 class="text-dark">Car price:</h4>
            <h4 class="text-dark">Car descreption:</h4><!--write abouts and add the image-->
        </div>  
        </div>    
        </section>

        <section id="slide-content">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-pause="hover" data-keyboard="true">
            <div class="carousel-inner"><!--add the images-->
                <div class="carousel-item active">
                <img class="img-section" src="./images/best_luxury_car.jpg" alt="">
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/best_luxury_car.jpg" alt="">
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/best_luxury_car.jpg" alt="">
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/best_luxury_car.jpg" alt="">
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        
        <?php include "cta+footer.php"; ?>
    </body>
</html>