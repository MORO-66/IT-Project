<?php

include "Functions.php";
check_login($db)

?>
<!DOCTYPE html>
<html>

  <head>
    <title>Qmotors</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <section id="title">
      <div class="container-fluid">
        <!-- Nav Bar -->

        <?php $is_home=true; include "navbar.php"; ?>


        <!-- Title -->

        <div class="row title-row">
          <div class="col-lg-6 ">
          </div>
          <div class="col-lg-6">
            
          <h1 class="n">Buy and rent best Cars in QMOTORS.</h1>
            <div class="bottons ">
            <?php
                      
                    if(isset($_SESSION['name'])){
                         
                        echo "<div class = 'Welcome_message' style = '    color: #eedad3d4;
    font-size: 30px;'> hello Mr . " . $_SESSION['name'] . "</div>";
                            
                        
                    }else{
                       
                     
                        echo "   <a href='./signup.php' target='_blank'><button type='button' class='btn btn-lg btn-dark download' >Sign up</button></a>
            <a href='./login.php' target='blank'><button  type='button'  class='btn btn-lg  btn-outline-light download'>Sign in</button></a>";
                        
                        
                    }
    
    
                ?>
            
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--Cars-->
    <div>
      <div>
        <div style="display: flex; justify-content: space-between; margin: 15px 5%; flex-wrap: wrap; gap: 10px;">
          <div class="card__body">
            <div class="card__body-cover">
              <img src="./images/WhatsApp Image 2023-04-10 at 12.25.38 PM.jpeg" alt="">
            </div>
            <header class="card__body-header">
              <p class="card__body-header-subtitle">Nissan Mustang : A Car that Every Woman need</p>
            </header>
            <h2>20000$</h2>
          </div>
          <div class="card__body">
            <div class="card__body-cover">
              <img src="./images/WhatsApp Image 2023-04-10 at 12.25.39 PM (1).jpeg" alt="">
            </div>
            <header class="card__body-header">
              <p class="card__body-header-subtitle">Rolls Royce Phantom : A Work Of Art</p>
            </header>
            <h2>30000$</h2>
          </div>
          <div class="card__body">
            <div class="card__body-cover">
              <img src="./images/WhatsApp Image 2023-04-10 at 12.25.39 PM (2).jpeg" alt="">
            </div>
            <header class="card__body-header">
              <p class="card__body-header-subtitle">Porsche 911 Carrera : Engineered for magic </p>
            </header>
            <h2>25000$</h2>
          </div>
          <div class="card__body">
            <div class="card__body-cover">
              <img src="./images/WhatsApp Image 2023-04-10 at 12.25.39 PM.jpeg" alt="">
            </div>
            <header class="card__body-header">
              <p class="card__body-header-subtitle">Mercedes Benz A-Class : The Peak Of Luxury</p>
            </header>
            <h2>27500$</h2>
          </div>
          <div class="card__body">
            <div class="card__body-cover">
              <img src="./images/WhatsApp Image 2023-04-10 at 12.25.40 PM.jpeg" alt="">
            </div>
            <header class="card__body-header">
              <p class="card__body-header-subtitle">Mopar Jeep : Proud Sponsors Of Mud</p>
            </header>
            <h2>26500$</h2>
          </div>
          <div>
            <div class="card__body">
              <div class="card__body-cover">
                <img src="./images/WhatsApp Image 2023-04-10 at 12.25.41 PM (1).jpeg" alt="">
              </div>
              <header class="card__body-header">
                <p class="card__body-header-subtitle">MG ZS : Take Charge </p>
              </header>
              <h2>150$ (Only For Rent)</h2>
            </div>
          </div>
          <div>
            <div class="card__body">
              <div class="card__body-cover">
                <img src="./images/WhatsApp Image 2023-04-10 at 12.25.41 PM.jpeg" alt="">
              </div>
              <header class="card__body-header">
                <p class="card__body-header-subtitle"> Audi Prollogue Avant : Best Midrange Car</p>
              </header>
            <h2>11000$</h2>
            </div>
          </div>
          <div>
            <div class="card__body">
              <div class="card__body-cover">
                <img src="./images/WhatsApp Image 2023-04-10 at 12.25.42 PM (1).jpeg" alt="">
              </div>
              <header class="card__body-header">
                <p class="card__body-header-subtitle">BMW : Best Seller Car</p>
              </header>
            <h2>28250$</h2>
            </div>
          </div><div>
            <div class="card__body">
              <div class="card__body-cover">
                <img src="./images/WhatsApp Image 2023-04-10 at 12.25.42 PM.jpeg" alt="">
              </div>
              <header class="card__body-header">
                <p class="card__body-header-subtitle">Toyota CHRm :Best Rental Car</p>
              </header>
              <h2>600$ (Only For Rent )</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Features -->

    <section id="features" class="row">
      <div class="col-lg-4 boxes">
        <i class="fa-sharp fa-solid fa-circle-check feature-icon"></i>
        <h3>Easy to use.</h3>
        <p>So easy to use, even if you are busy.</p>
      </div>
      <div class="col-lg-4 boxes">
        <i class="fa-solid fa-star feature-icon" ></i>
        <h3>Elite Clientele</h3>
        <p>We have all the cars, the greatest cars.</p>
      </div >
      <div class="col-lg-4 boxes">
        <i class="fa-solid fa-award feature-icon"></i>
        <h3>Feel life</h3>
        <p>you will feel greatness after this</p>
      </div>
    </section>

    <!-- Testimonials -->

    <section id="testimonials">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-pause="hover" data-keyboard="true">
        <h1>Best sales cars</h1>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h2 class="testimonial-text">nissan of a7 has better engine on the galaxy.</h2>
            <img class="img-section " src="./images/wallpaperflare.com_wallpaper (4).jpg" alt="dog-profile">
            <em>FIRRARI</em>
          </div>
          <div class="carousel-item">
            <h2 class="testimonial-text ">Having best and beautiful fast experience.</h2>
            <img class="testimonial-image img-section" src="./images/best_luxury_car.jpg" alt="lady-profile">
            <em>Rolls-Royce </em>
          </div>
          <div class="carousel-item">
            <h2 class="testimonial-text">Having best and beautiful fast experience.</h2>
            <img class="testimonial-image img-section" src="./images/bmw.jpg" alt="lady-profile">
            <em class="col-lg-6">BMW </em>
          </div>
          <div class="carousel-item">
            <h2 class="testimonial-text">Having best and beautiful fast experience.</h2>
            <img class="testimonial-image img-section" src="./images/bmw2.jpg" alt="lady-profile">
            <em>BMW 840i</em>
          </div>
          <div class="carousel-item">
            <h2 class="testimonial-text">Having best and beautiful fast experience.</h2>
            <img class="testimonial-image img-section" src="./images/car-nissan-race-cars-road-wallpaper-preview.jpg" alt="lady-profile">
            <em>Nissan GTR</em>
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
      </div>
    </section>


    <!-- Press -->
    <section id="press">
      <img class="press-logos" src="images/TechCrunch.png" alt="tc-logo">
      <img class="press-logos" src="images/tnw.png" alt="tnw-logo">
      <img class="press-logos" src="images/bizinsider.png" alt="biz-insider-logo">
      <img class="press-logos" src="images/mashable.png" alt="mashable-logo">

    </section>



    <!-- Pricing -->

    <section id="pricing">
      
      <h2>A List of modifies cars</h2>
      <p class="p">our new cars and pricing .</p>
      <div class="row">
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h3>Chihuahua</h3>
            </div>
            <div class="card-body">
              <h2>2000$ </h2>
              <p>fast</p>
              <p>kold bearing</p>
              <p>nice look</p>
              <button class="btn btn-lg btn-block btn-outline-dark " type="button">Sign Up</button>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card ">
            <div class="card-header ">
              <h3>Labrador</h3>
            </div>
            <div class="card-body">
              <h2>2370$ </h2>
              <p>fast</p>
              <p>kold bearing</p>
              <p>nice look</p>
              <button class="btn btn-lg btn-block btn-outline-dark " type="button">Sign Up</button>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h3>Mastiff</h3>
            </div>
            <div class="card-body">
              <h2>2200$ </h2>
              <p>fast</p>
              <p>kold bearing</p>
              <p>nice look</p>
              <button class="btn btn-lg btn-block btn-outline-dark " type="button">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      

    </section>


    <!-- Call to Action -->
    <?php include "cta+footer.php"; ?>


  </body>

</html>
