<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Q Motors</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <?php include "navbar.php"; ?>
    <form class="login2">
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10 login-div">
          <input type="email" class="form-control" name="email" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10 login-div">
          <input type="password" class="form-control" name="password" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 ">
        <div class="col-sm-10 offset-sm-2 ">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember-me" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Remember Me
            </label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-light">Sign in</button>
    </form>
    <?php include "cta+footer.php"; ?>
  </body>
</html>