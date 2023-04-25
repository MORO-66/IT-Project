<?php
    session_start();

    if(isset($_SESSION['User_name'])){
         unset($_SESSION['User_name']);
        session_destroy();
    }

        header("Location: index.php");
        die();
?>