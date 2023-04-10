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
                    echo "invalid password ";
                }
                  
              }else {
                 echo "invalid username ";
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
    <title>Q Motors</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <?php include "navbar.php"; ?>
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
    <?php include "cta+footer.php"; ?>
  </body>
</html>