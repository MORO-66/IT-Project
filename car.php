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
        <img class="img-section" src="" alt="">
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
            <img class="img-section" src="" alt="">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="img-section" src="" alt="">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="img-section" src="" alt="">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="img-section" src="" alt="">
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
    
    <section id="cta">
    <h3 class="h3">Download our Application for have a great sale.</h3>
    <button class="btn btn-lg btn-dark btn-f " type="button"><i class="fa-brands fa-apple" style="padding-right: 3px;"></i>Download</button>
    <button class="btn btn-lg btn-outline-light btn-f" type="button"><i class="fa-brands fa-google-play" style="padding-right: 3px;"></i>Download</button>
    </section>
    <footer id="footer">
        <i class="fa-brands fa-instagram" style="color: tomato;"></i>
        <i class="fa-brands fa-twitter" style="color:aqua;"></i>
        <i class="fa-brands fa-google" style="color:rgb(0, 137, 205);"></i>
    
        <p class="p">© Copyright Qmotors thats for jokes</p>
    
    </footer>
</body>
</html>