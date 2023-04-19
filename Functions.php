<?php
include "connect_db.php";
session_start();
function check_login($db){
            
    if(isset($_SESSION['User_name'])){
       $user1 = $_SESSION['User_name'];
            $sql1 = "SELECT * FROM users WHERE 'UserName' = '$user1' LIMIT 1";
            
            $result = mysqli_query($db  , $sql1);
            
            if($result && mysqli_num_rows($result) > 0){
                
                $user_data = mysqli_fetch_assoc($result); //stored in shape of array
              
                
                
            }
        
    }
    
        
}
?>
