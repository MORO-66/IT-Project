<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "head.php"; ?>
        <link rel="stylesheet" href="./css/cars.css">
        <title>Qmotors</title>
    </head>
    <body>

        <?php include "navbar.php"; ?>
        <!--content-->

        <section id="content-image">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-section" src="./images/bmw.jpg" alt="">
                </div>
                <div class="col-lg-6" style="text-align: left;" >
                    <h3>Car model:</h3><br> 
                    <h3>Price: </h3><br>
                    <h3>About:<!--comment about the car --></h3>
                </div>
            </div>
        </section>
        <section>
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img class="testimonial-image img-section" src="./images/WhatsApp Image 2023-04-10 at 12.25.38 PM.jpeg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img class="testimonial-image img-section" src="./images/bmw.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img class="testimonial-image img-section" src="./images/bmw2.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>
        <?php include "cta+footer.php"; ?>
    </body>

</html>