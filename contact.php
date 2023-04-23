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
        <div class=" col-lg-6 col-md-6 col-sm-8" style="text-align: center;">
            <label class="label">Frist name: </label><input class="input form-control" type="text" name="Frist name" value="" required><br>
            <label class="label">Last name: </label><input class="input form-control" type="text" name="Last name" value="" required><br>
            <label class="label">E-mail: </label><input class="input form-control" type="email" name="E_mail" value="" required><br>
            <label class="label">Feedback: </label><textarea style="margin-left: 250px;" name="Feedback" rows="8" cols="60"></textarea><br>
            <button style="margin-left: 450px" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
    <?php include "cta+footer.php"; ?>
</body>
</html>
