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
      <div>
        <div style="display: flex; justify-content: space-between; margin: 15px 5%; flex-wrap: wrap; gap: 10px;">
        <?php

              $sql = "SELECT Name , Photo , Price , Id From car";
              $result = mysqli_query($db , $sql);
              
        
              while($row = mysqli_fetch_assoc($result)){
                        
                echo "
                <a href = 'cars.php?Id=" . $row['Id']. "' style = 'text-decoration: none;' >
                <div class='card__body'>
                <div class='card__body-cover'>
                  <img src='".$row['Photo']."' alt=''>
                </div>
                <header class='card__body-header'>
                  <p class='card__body-header-subtitle'>".$row['Name']."</p>
                </header>
                <h2>".$row['Price']. "$" . "</h2>
              </div>
                </a>
                
                ";


              }

        ?>  





        </div>
      </div>
    </div>
    <?php include "cta+footer.php"; ?>
  </body>
</html>      