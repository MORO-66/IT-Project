<html lang="en" dir="ltr">
  <head>
    <title>Q Motors</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <?php include "navbar.php"; ?>
    <!--signup screen-->
    <div class="login">
      <h1>Sign-up</h1>
      <form class="" action="" method="post">
        <div class="row row-signup"> 
          <div class=" col-lg-6 col-md-6 col-sm-8"> 
            <label class="label ">Full Name </label><br>
            <label class="label">User name </label><br>
            <label class="label">E-mail: </label><br>
            <label class="label">NEW Password: </label><br>
            <label class="label">confirm Password: </label>
           
          </div>
          
          <div class=" col-lg-6 col-md-6 col-sm-4 ">
            <input class="input form-control" type="text" name="name" value="">
            <input class="input form-control" type="text" name="username" value="">
            <input class="input form-control" type="email" name="email" value="">
            
            <input class="input form-control" type="password" name="password" value="">
            
            <input class="input form-control" type="password" name="confirm-password" value="">
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
      </form>
    </div>
    <?php include "cta+footer.php"; ?>
  </body>
</html>
