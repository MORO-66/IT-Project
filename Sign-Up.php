<?php

    //connect database
   
    include "connect_db.php";
    //include "Functions.php";      
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $BirthDay = $_POST['birth-date'];
        $gender = $_POST['gender'];
        

      
        if(!empty($user) && !empty($pass) && !empty($BirthDay) &&  !is_numeric($user) && !is_numeric($name) && !is_numeric($email)){
              $sql = "INSERT INTO Data (Name,Username,Email , Password, BirthDay , Gender) VALUES ('$name', '$user', '$email' , '$pass' , '$BirthDay' , '$gender'); ";
              $result = mysqli_query( $db, $sql);
           
                header("Location: Login.php");
                exit();
           
        }else {
                echo "please enter valid input";      
        }             
    }
    
            
 ?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q Motors</title>
    <link rel="stylesheet" href="./css/project-A.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/all.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
      
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="./index.php" class="navbar-brand">
        <img src="./images/LOGO.ico" alt="icon" style="width: 100px;">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-outline-dark " >
            <a href="./Contact.php" target="blank" class="nav-link">contact</a>
          </button>
           <button type="button" class="btn btn-outline-dark">
            <a href="#footer" class="nav-link">about</a>
           </button>
          <button type="button" class="btn btn-outline-dark">
            <a href="#cta" class="nav-link">download</a>
          </button>
          </li>
        </ul>
      </div>
  
    </nav>
    <!--sign up screen-->
    <div class="login">
      <h1>Sign-up</h1>
      <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="row row-signup"> 
          <div class=" col-lg-6 col-md-6 col-sm-8"> 
            <label class="label ">Full Name </label><br>
            <label class="label">User name </label><br>
            <label class="label">E-mail: </label><br>
            <label class="label">NEW Password: </label><br>
            <label class="label">confirm Password: </label>
           
          </div>
          
          <div class=" col-lg-6 col-md-6 col-sm-4 ">
            <input class="input form-control" type="text" name="name" value="" required>
            <input class="input form-control" type="text" name="username" value="" required>
            <input class="input form-control" type="email" name="email" value="" required>
            
            <input class="input form-control" type="password" name="password" value="" required>
            
            <input class="input form-control" type="password" name="confirm-password" value="" required>
          </div>
    
          <br>
        </div> 
        <fieldset>
          <legend>Choose your gender</legend>
          <input type="radio" name="gender" id="gender-male" value="male">
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" id="gender-female" value="female">
          <label for="gender-female">Female</label>
          <input type="radio" name="gender" id="gender-other" value="other">
          <label for="gender-other">Other</label>
          <input type="radio" name="gender" id="gender-none" value="none">
          <label for="gender-none">Prefer not to say</label>
        </fieldset>
        <fieldset>
          <legend>Choose your Birth date</legend>
          <input type="date" name="birth-date">
        </fieldset><br>
   
        <input type="submit" name="finish" value="submit" role="button" class="btn btn-lg btn-outline-light">
          <br/><br/>
                 <button  class="btn"><a href = "Login.php">Login</a></button>
      </form>
    </div>


    <!-- Call to Action -->

  <section id="cta">

    <h3 class="h3">Download our Application for have a great sale.</h3>
    <button class="btn btn-lg btn-dark btn-f " type="button">Download</button>
    <button class="btn btn-lg btn-outline-light btn-f" type="button"><i class="fa-brands fa-google-play" style="padding-right: 1px;"></i>Download</button>

  </section>


  <!-- Footer -->

  <footer id="footer">
    <i class="fa-brands fa-instagram" style="color: tomato;"></i>
    <i class="fa-brands fa-twitter" style="color:aqua;"></i>
    <i class="fa-brands fa-google" style="color:rgb(0, 137, 205);"></i>

    <p class="p">© Copyright Qmotors thats for jokes</p>

  </footer>
  </body>
</html>
