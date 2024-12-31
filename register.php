
<?php
include "db.php";

$msg=" ";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Username=trim($_POST['name']);
    $Email=trim($_POST['email']);
    $Password=trim($_POST['password']);



    $sql="INSERT INTO admin(name,email,password) VALUES(?,?,?)";
    $stmt=mysqli_prepare($conn,$sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sss",$Username,$Email,$Password);
        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Successfully registered,Login to continue');
            </script>";
           // $msg="Admin registered successfully <a href="AdminLogin.php">GO Back to login page</a>";
        }
        else{
            echo "error";
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
    <title>Admin Register</title>
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
	margin: 20px 60px;
}
.button1[type="submit"]{
    margin:10px 50px;
}
.button1:hover{
            background-color:grey;
        }
  

        

    </style>

</head>
<body>
     <div class="box">
        <h2>Register for Admin</h2><br>


    <form method="POST" action="">
        
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
        
        </form>

        <form action="AdminLogin.php">
            <p style="margin:15px 110px;margin-bottom:5px ;"><i>Already registered?</i></p>
            <button class="button1" type="submit">Login</button>
            
         </form>

    
    </div>
</body>
</html>