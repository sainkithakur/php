<?php
$dbconn = mysqli_connect("localhost","root","","todo");
$id = $_REQUEST['id'];
mysqli_query($dbconn,"delete from tasks where id='$id'");
header("Location:todolist.php");
?>