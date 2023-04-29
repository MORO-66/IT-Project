<?php
    session_start();
    if(!isset($_SESSION['User_name'])){
            header("Location: index.php");
    }
    include "connect_db.php";
    $username=$_SESSION['User_name'];
    $is_admin=($username=="admin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User's profile</title>
    <?php include "head.php"; ?>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
      <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form action="feedback-list.php" id="card"  method="post">

          <div class="card shadow ">
            <div>
              <img src=" " alt=""class="img-fluid card-img-top ">  
            </div>
          <div class="card__body" >
            <h5 class="card-title"> </h5>
            <h5 class ="card_content"> </h5>

          </div>
          </div>

          </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">

        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">

        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">

        </div>
      </div>
    </div>
    <script>
    let posts=[
      <?php

              $sql = !$is_admin?"SELECT * FROM `feedback` WHERE `Username` LIKE '$username' ":"SELECT * FROM `feedback`";
              $result = mysqli_query($db , $sql);


              while($row = mysqli_fetch_assoc($result)){

                echo "{id:'" . $row['id']. "',Name:'".$row['Name']."',Username:'".$row['Username']."',Email:'".$row['Email']. "',Subject:'".$row['Subject']."',Feedback:'".$row['Feedback']."',Response:'".$row['Response']."'},";


              }

        ?>
    ];
    function get_item(data){
      let responded=(data['Response'] !== "");
      return " \
                <a href = 'feedback-view.php?Id=" + data['id']+ "' style = 'text-decoration: none;' > \
                <div class='card__body'> \
                <header class='card__body-header'> \
                  <h3 class='card__body-header-subtitle'>Subject: "+data['Subject']+"</h3> \
                </header> \
                <p>"+data['Feedback'].substring(0,200)+((data['Feedback'].length>200)?"...":"")+ "</p> \
                <p>"+((responded)?"Admin responded":"Witing for response")+ "</p> \
              </div> \
                </a>";
    }
    function get_item_admin(data){
      let responded=(data['Response'] !== "");
      return " \
                <a href = 'feedback-view.php?Id=" + data['id']+ "' style = 'text-decoration: none;' > \
                <div class='card__body'> \
                <header class='card__body-header'> \
                  <h3 class='card__body-header-subtitle'>Subject: "+data['Subject']+"</h3> \
                </header> \
                <p>"+data['Feedback'].substring(0,200)+((data['Feedback'].length>200)?"...":"")+ "</p> \
                <p>Name: "+data['Name']+"</p> \
                <p>Username: "+data['Username']+"</p> \
                <p>Email: "+data['Email']+"</p> \
                <p>"+((responded)?"Responded":"Witing for response")+ "</p> \
              </div> \
                </a>";
    }
    for(post of posts){
      document.getElementById("main-cont").innerHTML+=get_item<?php echo $is_admin?"_admin":"" ?>(post);
    }
    </script>
    <?php include "cta+footer.php"; ?>
</body>
</html>
