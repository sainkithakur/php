<?php
$conn = mysqli_connect("localhost","root","","ram");
session_start();
session_destroy();
header("Location:lite.php");
?>