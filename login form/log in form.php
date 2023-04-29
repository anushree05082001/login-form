<?php
require("connection.php");
?>




<html>
    <head>
        <title>Admin login panel</title>
        <meta charset="utf-8"name="viewport"content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <link rel="stylesheet"href="https://use.fontawesome.com/releases/vs.15.1/css/all.css"integrity="sha384.vp86vTRFgpj">
        
</head>
<body>
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST" >
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text"placeholder="Admin Name" name="AdminName">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password"placeholder="password" name="Adminpassword">

            </div>
            <button type="submit" name="signin">signin </button>
            <div class="extra">
                <a href="#">forget password ?</a>
            </div>

        </form>
    </div>
    <?php
    if(isset($_POST['signin']))
    {
        $query="SELECT * FROM `admin _login` WHERE 'Admin_Name'='$_POST[AdminName]' AND 'Admin_password'='$_POST[Adminpassword]'";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['Adminloginid']=$_POST['AdminName'];
           header("location: Admin panel.php");
        }
        else
        {
           echo"<script>alert('incorrect password');</script>";
        }
    }
   ?>

</body>
</html>