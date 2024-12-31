
<?php
include "db.php";

$msg=" ";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Studname=trim($_POST['name']);
    $StudEmail=trim($_POST['email']);
    $StudPassword=trim($_POST['password']);



    $sql="INSERT INTO student(name,email,password) VALUES(?,?,?)";
    $stmt=mysqli_prepare($conn,$sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sss",$Studname,$StudEmail,$StudPassword);
        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Successfully added');
            </script>";
            //header("Location:StudentInfo.php");
            //exit();
           // $msg="Admin registered successfully <a href="AdminLogin.php">GO Back to login page</a>";
        }
        else{
            echo "error";
            //$msg="Error:" , mysqli_stmt_error($stmt);
        }
    }
}

    //if(mysqli_query($sql)){
        //echo"data inserted";
       // $message="Admin registered successfully <a href="AdminLogin.php">Go back to login page</a>";
  //  }
   // else{
     //   echo "error";
    //}
//}
?>

<!Doctype html>
<head>
    <title>Student Register</title>
    <style>
        body{
            margin:0;
            padding:0;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .box{
            padding:20px 30px;
            width:100%;
            max-width:400px;
        }
        .box h2{
            text-align:center;
            margin-bottom:20px;
            color: #333;
        }
        .box label{
            display:block;
            margin-bottom:5px;
            color:#555;

        }
        .box input{
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border:1px solid;
            border-radius:4px;
        }
        .box input[type="submit"]{
	
	width: 100%;
	padding: 10px;
	color: #ffffff;
	background: none #191970;
	border: none;
	border-radius: 6px;
	font-size: 12px;
	cursor: pointer;
	margin: 10px 0;
	
}
.button1{
    width: 70%;
	padding: 10px;
	color: #ffffff;
	background:green;
	border: none;
	border-radius: 6px;
	font-size: 12px;
	cursor: pointer;
	margin: 30px 50px;
}
.button1:hover{
            background-color:grey;
        }
        

    </style>

</head>
<body>
     <div class="box">
        <h2>Add a new student</h2><br>
       
    <form method="POST" action="">
        
        <label for="name">Student Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Student Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">

    </form>
  
    <form action="StudInfo.php">
            <button class="button1" type="submit">View Students</button>
            
         </form>
         </div>
   
</body>
</html>