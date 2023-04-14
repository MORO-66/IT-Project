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
                <div class="col-lg-6">
                    <img class="img-section" src="./images/bmw.jpg" alt="" width="42" height="52" style="vertical-align:top;margin:15px 20px">
                </div>
                <div class="col-lg-6" >
                    <p>Car model: </p>
                    <p>Price: </p>
                    <p>About:<!--comment about the car --></p>
                </div>
            </div>
        </section>

        <section id="slide-content">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-pause="hover" data-keyboard="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/best_luxury_car.jpg" alt="">
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/bmw.jpg" alt="">
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/WhatsApp Image 2023-04-10 at 12.25.42 PM.jpeg" alt="">
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="img-section" src="./images/car-nissan-race-cars-road-wallpaper-preview.jpg" alt="">
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