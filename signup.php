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
    <title>Q Motors</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <?php include "navbar.php"; ?>
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
          <input type="radio" name="gender" id="gender-none" value="none" checked>
          <label for="gender-none">Prefer not to say</label>
        </fieldset>
        <fieldset>
          <legend>Choose your Birth date</legend>
          <input type="date" name="birth-date" required>
        </fieldset><br>
   
        <input type="submit" name="finish" value="submit" role="button" class="btn btn-lg btn-outline-light">
          <br/><br/>
                 <button  class="btn"><a href = "Login.php">Login</a></button>
      </form>
    </div>
    <?php include "cta+footer.php"; ?>
  </body>
</html>
