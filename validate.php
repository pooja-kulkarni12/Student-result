<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
     //$inusername = trim($_POST["username"]);
     //$inpassword = trim($_POST["password"]);

     $sql = mysqli_query($conn,
     "SELECT * FROM admin WHERE name='"
     . $_POST["username"] . "' AND
     password='" . $_POST["password"] . "'    ");
   
     $num = mysqli_num_rows($sql);
   
     if($num > 0) {
         $row = mysqli_fetch_array($sql);
         //echo "success";
         header("location:AdminPage.php");
         //exit();
     }
     else {
       $error="Invalid credentials, pls recheck and continue";
        header("Location: AdminLogin.php?error=" .urlencode($error));
        exit;
       
     }
    }
    
       
    ?>