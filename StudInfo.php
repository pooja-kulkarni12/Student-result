<?php 
include "db.php";

$sql="SELECT * FROM student";
$res=mysqli_query($conn,$sql);
?>



<!Doctype html>
<head>
    <title>Student List</title>
    <style>
        body h1{
            text-align:center;
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px auto;
        }
        table,th,td{
            border:1px solid black;
        }
        th,td{
            padding:10px;
            text-align:left;
        }
        .action-btn{
            padding:5px 10px;
            text-decoration:none;
            color:white;
            border-radius:5px;
            margin:30px 10px;
            
            
        }
        .edit-btn{
            background-color:green;
            
        }
        .delete-btn{
            background-color:red;
            
        }
        .button1{
            margin:100px 600px;
            padding:10px 30px;
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
    <h1><i>Students List</i></h1><br>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Percentage</th>
            <th>Result</th>
            <th>Action</th>
        </tr>
        </thead>

     <?php
       if(mysqli_num_rows($res)>0){
          while($row=mysqli_fetch_assoc($res)){
             echo "<tr>";
             echo "<td>" . $row["id"]. "</td>";
             echo "<td>" . $row["name"]. "</td>";
             echo "<td>" . $row["email"]. "</td>";
             echo "<td>" . $row["percentage"]. "</td>";
             echo "<td>" . $row["result"]. "</td>";
             echo "<td>";
             echo "<a href='EditStudent.php?id=" .$row["id"] ."' class='action-btn edit-btn'>Edit</a>";
             echo "<a href='DeleteStud.php?id=" .$row["id"] ."' class='action-btn delete-btn'>Delete</a>";
             echo "</td>";
             echo"</tr>";
          }
       }
       else{
        echo "No Students found";
       }
       ?>
       </table>
       <br>
       <form action="AdminPage.php">
            <button class="button1" type="submit">Go Back</button>
         </form>
    </body>
    </html>










       

