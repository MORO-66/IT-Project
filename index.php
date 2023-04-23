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
                    <div class = "Latest-Cars" style = "
    width: 90%;
    height: 52px;
    line-height: 2;
    font-size: 22px;
    background: #18221c;
    color: #fff;
    margin: 0 auto;
">
                        Latest Added Cars :
                  </div>
    <!--Cars-->
    <div>
      <div>
        <div style="display: flex; justify-content: space-between; margin: 15px 5%; flex-wrap: wrap; gap: 10px;">
        <?php

                    $sql = "SELECT Name , Photo , Price , Id From car LIMIT 6";
                    $result = mysqli_query($db , $sql);

                    while($row = mysqli_fetch_assoc($result)){

                      echo "
                      <a href = 'cars.php?Id=" . $row['Id']. "' style = 'text-decoration: none;' >
                      <div class='card__body'>
                      <div class='card__body-cover'>
                        <img src='".$row['Photo']."' alt=''>
                      </div>
                      <header class='card__body-header'>
                        <p class='card__body-header-subtitle'>".$row['Name']."</p>
                      </header>
                      <h2>".$row['Price']. "$" . "</h2>
                    </div>
                      </a>

                      ";


                    }

                    ?>
        </div>
      </div>
            <div class = "show-more" style = '       width: 11%;
    margin: 0 auto;
    height: 41px;
    background: #18221c;
    border-radius: 18px;
    font-size: 23px;
    margin-bottom: 10px;'><a href = "Product_Page.php" style = '    color: #fff;
    list-style: none;
    text-decoration: none;'>Show More</a></div>
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
            <?php
           
            $sql = "SELECT * From car";
            $result = mysqli_query($db , $sql);
            $row = mysqli_fetch_assoc($result);
           ?>
                    

<div class='carousel-item active'>
<a href = "cars.php?Id=<?php echo $row['Id'] ?>">
<h2 class='testimonial-text'><?php echo $row['Name'] ?></h2>
<img class='img-section ' src='<?php echo $row['photo'] ?>' alt='dog-profile'>
<em><?php echo $row['Price'] ?>$</em>
</a></div>

<?php $row = mysqli_fetch_assoc($result); ?>
<div class='carousel-item'>
<a href = "cars.php?Id=<?php echo $row['Id'] ?>">
<h2 class='testimonial-text '><?php echo $row['Name'] ?></h2>
<img class='testimonial-image img-section' src='<?php echo $row["photo"] ?>' alt='lady-profile'>
<em><?php echo $row['Price']; ?>$</em>
                  </a>
</div>

<?php $row = mysqli_fetch_assoc($result); ?>
<div class='carousel-item'>
<a href = "cars.php?Id=<?php echo $row['Id'] ?>">
<h2 class='testimonial-text '><?php echo $row['Name'] ?></h2>
<img class='testimonial-image img-section' src='<?php echo $row["photo"] ?>' alt='lady-profile'>
<em><?php echo $row['Price']; ?>$</em>
                  </a>
</div>

<?php $row = mysqli_fetch_assoc($result); ?>
<div class='carousel-item'>
<a href = "cars.php?Id=<?php echo $row['Id'] ?>">
<h2 class='testimonial-text '><?php echo $row['Name'] ?></h2>
<img class='testimonial-image img-section' src='<?php echo $row["photo"] ?>' alt='lady-profile'>
<em><?php echo $row['Price']; ?>$</em>
                  </a>
</div>

<?php $row = mysqli_fetch_assoc($result); ?>
<div class='carousel-item'>
<a href = "cars.php?Id=<?php echo $row['Id'] ?>">
<h2 class='testimonial-text '><?php echo $row['Name'] ?></h2>
<img class='testimonial-image img-section' src='<?php echo $row["photo"] ?>' alt='lady-profile'>
<em><?php echo $row['Price']; ?>$</em>
                  </a>
</div>
                 
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div><!-- end carousel-inner -->

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
              <button class="btn btn-lg btn-block btn-outline-dark " type="button"><a href = "SignUp.php">Sign Up</a></button>
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
              <button class="btn btn-lg btn-block btn-outline-dark " type="button"><a href = "SignUp.php">Sign Up</a></button>
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
              <button class="btn btn-lg btn-block btn-outline-dark " type="button"><a href = "SignUp.php">Sign Up</a></button>
            </div>
          </div>
        </div>
      </div>



    </section>


    <!-- Call to Action -->
    <?php include "cta+footer.php"; ?>


  </body>

</html>
