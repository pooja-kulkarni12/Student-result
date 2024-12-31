<!Doctype html>
<head>
    <title>Admin Page</title>
    <style>
        *{
        margin:0;
        padding:0;
        box-sizing:border-box;
      }
      body{
        color:#333;
      }
      .main{
        text-align:center;
        padding:70px 20px;
        background:rgba(255,255,255,0.8);
        margin:20px auto;
        width:90%;
        border-radius:10px;
      }
        .button{
            margin:10px 10px;
            padding:15px 20px;
            text-decoration:none;
            background-color:black;
            color:white;
            border:none;
            border-radius:5px;
            
            
        }
        .button1{
            margin:10px 10px;
            padding:10px 15px;
            text-decoration:none;
            background-color:green;
            color:black;
            border:none;
            border-radius:5px;
            
            
        }
        .buttons form{
            text-align:center;
            padding:0 5px;
            margin:0 10px;
            text-align:center;
            
        
            
        
        }
        .button1:hover{
            background-color:grey;
        }
    
        .button:hover{
            background-color:grey;
        }
        </style>
</head>
<body>
    <div class="main">
    <h1>Welcome Admin!!</h1><br>
    <p>You are logged in as administrator</p>
    </div>

    <div class="buttons">
         <form action="StudInfo.php">
            <b><i>To view the students list : </i></b>
            <button class="button" type="submit">Student List</button>
    </form>

    <form action="register.php">
            <b><i>To register new admin: </i></b>
            <button class="button" type="submit">Add admin</button>
    </form>
    <form action="AddStud.php">
          <b> <i> To register new student: </i></b>
            <button class="button" type="submit">Add Student</button>
    </form>
        <br>
        <br>
         <form action="home.php">
            <button class="button1" type="submit">Go to Home Page</button>
         </form>
    </div>
</body>
</html>