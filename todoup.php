<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit To do</title>
</head>
<body>

<?php

$dbconn = mysqli_connect("localhost","root","","todo");
$id = $_REQUEST['id'];

$userdata = mysqli_fetch_array(mysqli_query($dbconn,"select * from tasks where id='$id'"));

//var_dump($userdata);
if(isset($_POST['abcdupdate']))
{

  $a =  $_POST['title'];
    $b =  $_POST['datetime'];
    $c = $_POST['desc'];


    mysqli_query($dbconn,"update tasks set title='$a',datetime='$b',description='$c' where id='$id'");
    header("Location:todolist.php");

}


?>


    
<center><h1>Add To Do</h1></center>
<form method="post">
<label>Title</label>
<input type="text" name="title" value="<?php echo $userdata['title'] ?>"><br><br>
<label>Date TIme</label>
<input type="datetime-local" name="datetime"  value="<?php echo $userdata['datetime'] ?>">

<br><br>
<label>Description</label><br>
<Textarea name="desc"><?php echo $userdata['description'] ?></Textarea>
<br><br>
<button type="submit" name="abcdupdate">Update</button>
</form>

</body>
</html>