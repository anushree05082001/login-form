<?php

$conn = mysqli_connect("localhost","root","") or die("Unable to connect to database");

mysqli_select_db($conn, 'student_profile') or die('Unable to find database');
