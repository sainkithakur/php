<?php
$conn = mysqli_connect("localhost","root","","facebook");
session_start();
session_destroy();
header("Location:dp.php");
?>