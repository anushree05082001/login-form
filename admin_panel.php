<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <style>
        div.header{
            font-family:poppings;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:#204969;

        }
        div.header button{
            background-color: black;
            font-size: 16px;
            font-weight: 550;
            border:2px solid black;
        }
        </style>
</head>
<body>
   <div class="header">
    <h1>welcome to admin panel-<?php echo $_SESSION['adminloginid']?></h1>
    <button>next</button>
   </div>
    
</body>
</html>
