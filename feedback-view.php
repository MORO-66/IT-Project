<?php

    session_start();
    if(!isset($_SESSION['User_name'])){
            header("Location: index.php");
    }
    include "Functions.php";
    $username=$_SESSION['User_name'];
    $is_admin=($username=="admin");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "head.php"; ?>
        <title>Qmotors</title>
    </head>
    <body>

        <?php include "navbar.php"; ?>
        <!--content-->
        <?php
            $Id =  $_GET['Id'];

            if($_SERVER['REQUEST_METHOD'] == "POST" && $is_admin){
                $Response = $_POST['Response'];
                if(!empty($Response)){
                    $sql = "UPDATE `feedback` SET `Response` = '$Response' WHERE `feedback`.`id` = $Id ";
                    $result = mysqli_query( $db, $sql);
                }else {
                        echo "please enter valid input";
                }
            }

            $sql = "SELECT * FROM `feedback` WHERE `id` = $Id";
            $result = mysqli_query($db , $sql);
            if(!$result){echo mysqli_error($db);exit();}
            $row = mysqli_fetch_assoc($result);
            if($username!=$row['Username']&& !$is_admin) header("Location: index.php");
            $has_response=isset($row['Response'])&& !empty($row['Response']);

        ?>

        <section id='content-image'>
            <div class='row'>
                <div class='col-lg-12' >
                    <h1 ><?php echo $row['Subject'] ; ?> </h1>
                    <h3>Name: <?php echo $row['Name'] ; ?></h3>
                    <h3>Username: <?php echo $row['Username'] ; ?></h3>
                    <h3>Email: <?php echo $row['Email'] ; ?></h3>
                </div>
                <p><?php echo $row['Feedback'] ; ?> </p>
                <h3>Response from Admin: </h3>
                 <p><?php echo $has_response?$row['Response']:($is_admin?"":"The admin has not responded yet"); ?></p>
                 <div style="display: <?php echo $has_response?"none":($is_admin?"block":"none"); ?>">
                    <form method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>?Id=<?php echo $Id ?>">
                        <textarea style="margin-left: 250px;"  name="Response" rows="8" cols="60" required></textarea><br/>
                        <button style="margin-left: 450px"  type="submit" class="btn btn-primary">Submit</button>
                    </form>
                 </div>
            </div>
        </section>





        <?php include "cta+footer.php"; ?>
    </body>

</html>
