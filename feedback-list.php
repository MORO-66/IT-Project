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
    <div>
      <div>
        <div style="display: flex; justify-content: space-between; margin: 15px 5%; flex-wrap: wrap; gap: 10px;" id="main-cont">

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
