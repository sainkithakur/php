<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To do</title>
</head>
<body>

<?php
$dbconn = mysqli_connect("localhost","root","","todo");

if(isset($_POST['abcd']))
{

  $a =  $_POST['title'];
    $b =  $_POST['datetime'];
    $c = $_POST['desc'];

    mysqli_query($dbconn,"insert into tasks (title,datetime,description) values ('$a','$b','$c')");

}


?>


    
<center><h1>Add To Do</h1></center>
<form method="post">
<label class="aa">Title</label>
<input type="text" name="title"><br><br>
<label>Date TIme</label>
<input type="datetime-local" name="datetime">

<br><br>
<label>Description</label><br>
<Textarea name="desc"></Textarea>
<br><br>
<button type="submit" name="abcd">Submit</button>
</form>

</body>
</html>