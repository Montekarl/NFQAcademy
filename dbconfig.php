<?php

$host = "localhost";
$user = "root";
$password = "";
$datbase = "nfq";
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$datbase);
include "header.php";