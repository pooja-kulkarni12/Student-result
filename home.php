<!Doctype html>
<html>
    <head>
        <title>Home Page</title>
    <style>
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
      }
      body{
        color:#333;
      }
      .navbar{
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:15px 20px;
        background:#333;
        color:white;
        position:sticky;
        top:0;
        z-index:1000;
      }
      .navbar .logo{
        font-weight:bold;
        letter-spacing:2px;
      }
      .navbar a{
        color:white;
        text-decoration:none;
        padding:10px 15px;
        margin:0 10px;
      }
      .navbar a:hover{
        backgroud:black;
        color:grey;
        border-radius:5px;
      }
      .navbar .nav-links{
        display:flex;
      }
      .main{
        text-align:center;
        padding:100px 20px;
        background:rgba(255,255,255,0.8);
        margin:20px auto;
        width:90%;
        border-radius:10px;
      }
      .main h1{
        margin-bottom:20px;
        color:#333;
      }
      .main p{
        margin-bottom:20px;
      }
      .main a{
        text-decoration:none;
        color:white;
        padding:10px 20px;
        border-radius:5px;
      }
      .main a:hover{
        background:black;
      }
    .login{
        display:flex;
        justify-content:center;
        gap:30px;
        padding:10px 15px;
    }
    .login a{
        text-decoration:none;
        color:white;
        padding:15px 20px;
        border-radius:5px;
        background:#333;

    }
    .login a:hover{
        background:grey;
      }
    </style>
    </head>
    <body>
        <header class="navbar">
            <div class="logo">Student Grading Website</div>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="home.php">About</a>
                <a href="home.php">Contact</a>
            </div>
        </header>
        <main class="main">
            <h1>Hi, Welcome to grading website </h1>
            <p>Students can view their results easily by logging in themselves.</p>
            <p>Navigate through the menu to explore about section or to get in touch with us.</p>
        </main>
        
        <section class="login">
            
            <a href="AdminLogin.php">Admin Login</a>
            <a href="StudLogin.php">Student Login</a>
        </section>
</body>
</html>
