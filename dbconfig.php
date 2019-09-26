<?php

$host = "us-cdbr-iron-east-02.cleardb.net";
$user = "b0d30ac5761d76";
$password = "08df4f57";
$datbase = "heroku_6b4d1af85eae168";
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$datbase);
include "header.php";