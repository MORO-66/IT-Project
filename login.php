<?php
      session_start();
     //connect database
   
    include "connect_db.php";
  //  include "Functions.php";
          
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $email = $_POST['email'];
        $pass = $_POST['password'];
     
         $sql = "SELECT * FROM data WHERE Email = '$email';";
    
  if(!empty($email) && !empty($pass) &&  !is_numeric($email)){

              $result = mysqli_query($db, $sql);
               
              if($result && mysqli_num_rows($result) > 0){
              $userdata = mysqli_fetch_assoc($result);
      
                if($userdata['Password'] == $pass){
                        ///set for the session
                    $_SESSION['name'] = $userdata['Name'];
                    $_SESSION['User_name'] = $userdata['UserName'];
                    $_SESSION['pass_word'] = $userdata['Password'];
                    $_SESSION['birthday'] = $userdata['BirthDay'];
                    $_SESSION['gender'] = $userdata['Gender'];

                    header("Location: index.php");
                    
                }else {
                    echo "invalide password ";
                }
                  
              }else {
                 echo "invalide username ";
              }
        }

        else {
                echo "please enter valid input";      
        }             
    }
    //check if the data exist in database
    
   



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q Motors</title>
    <!--main css-->
    <link rel="stylesheet" href="./css/project-A.css">
    <!--bootstrap css-->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!--fonts and icons-->
    <link rel="stylesheet" href="./css/all.min.css">
    <!--contact css-->
    <link rel="stylesheet" href="./css/contact.css">
  </head>
  <body>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Nav bar-->
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
              <a href="mailto:fhhc9470@gmail.com" class="nav-link">contact</a>
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

    <form class="login2" method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 ">
        <div class="col-sm-10 offset-sm-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember-me" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Remember Me
            </label>
          </div>
        </div>
      </div>
      <button  class="btn"><a href = "Sign-Up.php">sign up</a></button>
      <button type="submit" class="btn btn-primary">Sign in</button>
      
    </form>
      
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