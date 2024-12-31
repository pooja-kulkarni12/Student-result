<?php
include "db.php";

if(isset($_GET['id'])){
    $id=(int) $_GET['id'];
    $sql="DELETE FROM student WHERE id=$id";

    if(mysqli_query($conn,$sql)){
        header("Location:StudInfo.php");
    }
}
?>