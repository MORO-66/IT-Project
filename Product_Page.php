<?php

include "Functions.php";
check_login($db)

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Q Motors</title>
    <?php include "head.php"; ?>
  </head>
  <body>
    <?php include "navbar.php"; ?>


    <!--Cars-->
    <div>
      <input class="form-control" type="search" id="searchbox" oninput="search()" placeholder="Search..."/>
      <div>
        <div style="display: flex; justify-content: space-between; margin: 15px 5%; flex-wrap: wrap; gap: 10px;" id="main-cont">

        </div>
      </div>
    </div>
    <script>
    let cars=[
      <?php

              $sql = "SELECT Name , Photo , Price , Id From car";
              $result = mysqli_query($db , $sql);


              while($row = mysqli_fetch_assoc($result)){

                echo "{Id:'" . $row['Id']. "',Photo:'".$row['Photo']."',Name:'".$row['Name']."',Price:'".$row['Price']. "'},";


              }

        ?>
    ];
    function get_item(data){
      return " \
                <a href = 'cars.php?Id=" + data['Id']+ "' style = 'text-decoration: none;' > \
                <div class='card__body'> \
                <div class='card__body-cover'> \
                  <img src='"+data['Photo']+"' alt=''> \
                </div> \
                <header class='card__body-header'> \
                  <p class='card__body-header-subtitle'>"+data['Name']+"</p> \
                </header> \
                <h2>"+data['Price']+ "$</h2> \
              </div> \
                </a>";
    }
    for(car of cars){
      document.getElementById("main-cont").innerHTML+=get_item(car);
    }
    function search(){
      let text = document.getElementById("searchbox").value;
      document.getElementById("main-cont").innerHTML="";
      for(car of cars){
        if(car.Name.toLowerCase().includes(text.toLowerCase())) document.getElementById("main-cont").innerHTML+=get_item(car);
      }
    }
    </script>
    <?php include "cta+footer.php"; ?>
  </body>
</html>      
