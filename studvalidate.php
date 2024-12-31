<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
     //$inusername = trim($_POST["username"]);
     //$inpassword = trim($_POST["password"]);

     $sql = mysqli_query($conn,
     "SELECT * FROM student WHERE name='"
     . $_POST["username"] . "' AND
     password='" . $_POST["password"] . "'    ");
   
     $num = mysqli_num_rows($sql);
   
     if($num > 0) {
         $row = mysqli_fetch_assoc($sql);

         $_SESSION["stud_id"]=$row["id"];
         $_SESSION["stud_name"]=$row["name"];
         //echo "success";
         header("Location:StudentInfo.php");
         //exit();
     }
     else {
       $error="Invalid credentials, pls recheck and continue";
        header("Location: StudLogin.php?error=" .urlencode($error));
        exit;
       
     }
    }
    
       
    ?>