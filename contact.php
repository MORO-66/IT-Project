<?php
    include "Functions.php";
    $logged_in=isset($_SESSION['User_name']);

    if($_SERVER['REQUEST_METHOD'] == "POST" && $logged_in){

        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $user = $_SESSION['User_name'];
        $Subject = $_POST['Subject'];
        $Feedback = $_POST['Feedback'];



        if(!empty($Subject) && !empty($Feedback)){
              $sql = "INSERT INTO `feedback` (`Name`, `Email`, `Username`, `Subject`, `Feedback`) VALUES ('$name', '$email', '$user', '$Subject', '$Feedback'); ";
              $result = mysqli_query( $db, $sql);
              //echo $result;
              header("Location: feedback-list.php");
              exit();

        }else {
                echo "please enter valid input";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Q Motors</title>
    <?php include "head.php"; ?>
    <link rel="stylesheet" href="/css/contact.css">
</head>
<body style="text-align: center;">
    <style media="screen">
      .input {
        margin-left: 250px;
      }
      .label {
        margin-left: 250px;
      }
    </style>
    <?php include "navbar.php"; ?>
    <div style="text-align: center; margin: 7% 15%; padding-bottom: 10%; background: hsla(0, 0%, 0%, 0.475); color: white;">
    <h2>Customer</h2>
    <h1>Feedback</h1>
    <h3>Thank you for using the QMotors on your journey to modern marketing how can we do better? </h3>
    <p>let us know your thoughts</p>
    <div class="row row-signup" style="text-align: center;">
        <form method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>" class=" col-lg-6 col-md-6 col-sm-8" style="text-align: center;display: <?php echo $logged_in?"block":"none"; ?>">
            <label class="label">Subject: </label><input class="input form-control" type="text" name="Subject" value="" required><br/>
            <label class="label">Feedback: </label><textarea style="margin-left: 250px;"  name="Feedback" rows="8" cols="60" required></textarea><br/>
            <button style="margin-left: 450px"  type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p style="text-align: center;display: <?php echo $logged_in?"none":"block"; ?>">please <a href="login.php">sign in</a> or <a href="signup.php">sign up</a> to submit feedback</p>
    </div>
    </div>
    <?php include "cta+footer.php"; ?>
</body>
</html>
