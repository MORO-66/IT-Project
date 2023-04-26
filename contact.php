<!DOCTYPE html>
<html lang="en">
<head>
    <title>Q Motors</title>
    <?php include "head.php"; ?>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div style="text-align: center; background-color:hsla(0, 3%, 14%, 0.456); margin: 7% 15%; padding-bottom: 10%;">
    <h2>Customer</h2>
    <h1>Feedback</h1>
    <h3>Thank you for using the QMotors on your journey to modern marketing how can we do better? </h3>
    <p>let us know your thoughts</p>
    <div class="row row-signup"> 
        <div class=" col-lg-6 col-md-6 col-sm-8"> 
            <label class="label">Frist name: </label><input class="input form-control" type="text" name="Frist name" value="" required><br>
            <label class="label">Last name: </label><input class="input form-control" type="text" name="Last name" value="" required><br>
            <label class="label">E-mail: </label><input class="input form-control" type="email" name="E_mail" value="" required><br>
            <label class="label">Feedback: </label><textarea name="Feedback" rows="8" cols="60"></textarea><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
    <?php include "cta+footer.php"; ?>
</body>
</html>