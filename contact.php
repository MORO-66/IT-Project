<!DOCTYPE html>
<html lang="en">
<head>
    <title>Q Motors</title>
    <?php include "head.php"; ?>
</head>
<body>
    <?php include "navbar.php"; ?>
    <h2>Customer</h2>
    <h1>Feedback</h1>
    <p>Thank you for using the QMotors on your journey to modern marketing how can we do better? </p>
    <p>let us know your thoughts</p>
    <div class="row row-signup"> 
        <div class=" col-lg-6 col-md-6 col-sm-8"> 
            <label class="label">Frist name: </label><br>
            <label class="label">Last name: </label><br>
            <label class="label">E-mail: </label><br>
            <label class="label">Feedback: </label><br>
            <input class="input form-control" type="text" name="Frist name" value="" required>
            <input class="input form-control" type="text" name="Last name" value="" required>
            <input class="input form-control" type="email" name="E_mail" value="" required>
            <textarea name="Feedback" rows="30" cols="20"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    <?php include "cta+footer.php"; ?>
</body>
</html>