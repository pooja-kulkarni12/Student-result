<?php 
include "db.php";
session_start();

$Student_id=$_SESSION["stud_id"];

$sql="SELECT * FROM student WHERE id=$Student_id";
$res=mysqli_query($conn,$sql);

if($res && mysqli_num_rows($res)==1){
    $Student=mysqli_fetch_assoc($res);
} 
else{
    die("Student not found");
}
?>



<!Doctype html>
<head>
    <title>Student List</title>
    <style>
         body h1{
            text-align:center;
        }
        table{
            text-align:center;
            width:100%;
            border-collapse:collapse;
            margin-top:40px 40px;
        }
        table,th,td{
            border:1px solid black;
        }
        th,td{
            padding:10px;
            text-align:center;
            margin-top:30px 30px;
        }
        .button1{
            margin:30px 600px;
            padding:10px 15px;
            text-decoration:none;
            background-color:black;
            color:white;
            border:none;
            border-radius:5px;
            
            
        }
        
        .button1:hover{
            background-color:grey;
        }
        </style>
</head>
<body>
    <h1>WELCOME , <?php echo $_SESSION["stud_name"];?></h1><br>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <td><?php echo $Student["id"];?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $Student["name"];?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $Student["email"];?></td>
        </tr>
        <tr>
            <th>Grade</th>
            <td><?php echo $Student["percentage"];?></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><?php echo $Student["result"];?></td>
        </tr>
    </table>
    <br>

    <form action="logout.php">
            <button class="button1" type="submit">Logout</button>
         </form>
   
    </body>
            
    </html>










       

