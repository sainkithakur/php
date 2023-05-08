<?php
$dbconn = mysqli_connect("localhost","root","","ram");
$id = $_REQUEST['id'];
mysqli_query($dbconn,"delete from users where id='$id'");
{
header("Location:valist.php");
}
?>