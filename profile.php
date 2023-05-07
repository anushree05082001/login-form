<?php
    require_once "connection.php";

    $query1 = "SELECT * FROM `branches`;";
    $run_query1 = mysqli_query($conn, $query1);
?>
<html>

<head>
    <title> student profile</title>
    <link rel="stylesheet" href="my.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="register">
            <form method="POST" action="add_profile.php">
                <div class="input-control">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name">
                </div>
                <div class="input-control">
                    <label for="name">Father's Name</label>
                    <input type="text" name="father_name">
                </div>
                <div class="input-control">
                    <label for="name">mother's Name</label>
                    <input type="text">
                </div>
                <div class="input-control">
                    <label for="name">phone no</label>
                    <input type="number">
                </div>
                <div class="input-control">
                    <label for="name">email</label>
                    <input type="email">
                </div>
                <div class="input-control">
                    <label for="name">Gender</label><br>
                    female:<input type="radio" name="gender">
                    male:<input type="radio" name="gender">
                    other:<input type="radio" name="gender">
                </div>
                <div class="input-control">
                <label for="name">DOB</label>
                    <input type="date">
                </div>
                <div  class="input-control">
                <label for="name">Address</label>    
                <input type="text">
                </div>
                <div class="input-control">
                    <label for="name">Branch</label>
                    <select name="drop-down">
                        <?php
                            if(mysqli_num_rows($run_query1) > 0){
                                while ($row = mysqli_fetch_assoc($run_query1)) {
                                    echo '<option value="'.$row['branch_id'].'">'.$row['branch'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="input-control">
                    <label for="name">State</label>
                    <select name="drop down">
                        <option value="odisha">punjab</option>
                        <option value="punjab">odisha</option>
                        <option value="karnatak">karnatak</option>
                        <option value="rajastan">rajasthan</option>
                    </select>
                </div>
                <div class="input-control">
                    <label for="name">Course</label>
                    <select name="drop down">
                        <option value="B. Tech">B. Tech</option>
                        <option value="M. Tech">M. Tech</option>
                        <option value="MBA">MBA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </div>
                <div class="input-control">
                    <label for="name">Image</label>
                    <input type="file">
                </div>
                <div class="input-control">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>