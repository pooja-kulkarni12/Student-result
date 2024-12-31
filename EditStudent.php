<?php
include "db.php";

$student=null;

if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['id'])){
    $id=(int)$_GET['id'];

    $sql="SELECT * FROM student WHERE id=$id";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)==1){
        $student=mysqli_fetch_assoc($res);
       // echo "fetched";
    }
    else{
        die("Not found");
    }
}

if($_SERVER['REQUEST_METHOD']==='POST'){
   $id=(int) $_POST['id'];
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $per=(int) $_POST['percentage'];
    $res=mysqli_real_escape_string($conn,$_POST['result']);

    $sql="UPDATE student SET name='$name', email='$email',percentage=$per,result='$res' WHERE id=$id";

    if(mysqli_query($conn,$sql)){
       echo "updated";
        header("Location:StudInfo.php");
    }
    else{
        echo "error";
    }


}
?>

<!DOCTYPE html>
<head>
    <title>Edit</title>
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
        

    </style>
</head>
<body>
   
    <?php if($student): ?>
        <div class="box">
        <h2>Edit Student</h2>
        <form method="POST" action="EditStudent.php">
            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($student['name']);?>" required> <br>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($student['email']);?>" required> <br>

            <label>Percentage:</label>
            <input type="text" name="percentage" value="<?php echo $student['percentage'];?>" required> <br>

            <label>Result:</label>
            <input type="text" name="result" value="<?php echo htmlspecialchars($student['result']);?>" required> <br>

            <input type="submit" value ="Update">
    </form>
    </div>
    <?php else: ?>
        <p>Invalid</p>
        <?php endif; ?>
    </body>
    </html>