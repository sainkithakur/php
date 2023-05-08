<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vaedit</title>
</head>
<body>

<?php

$dbconn = mysqli_connect("localhost","root","","ram");
$id = $_REQUEST['id'];

$userdata = mysqli_fetch_array(mysqli_query($dbconn,"select * from users where id='$id'"));


if(isset($_POST['dataupdate']))
{
!
    $a = $_POST['name'];
    $b = $_POST['gender'];
    $c = $_POST['dob'];
    $d = $_POST['email'];
    $e = $_POST['mobile'];
    $f = $_POST['password'];

    mysqli_query($dbconn,"update users set name='$a',gender='$b',dob='$c',email='$d',mobile='$e',password='$f' where id='$id'");
    header("Location:valist.php");

}


?>


    
<center><h1>Add To Do</h1></center>
<form method="post" action="">
<label>NAME</label><br>
<Textarea name="name"  value="<?php echo $usersdataa['name'] ?>"></Textarea>
<br><br>
<label>GENDER</label><br>
<Textarea name="gender" value="<?php echo $usersdataa['gender'] ?>"></Textarea>
<br><br>

<br><br>
<label>DOB</label><br>
<Input name="dob" type="date" value="<?php echo $usersdataa['dob'] ?>"></Input>
<br><br>
<label>Email</label><br>
<Textarea name="email" value="<?php echo $usersdataa['email'] ?>"></Textarea>
<br><br>
<label>Mobile</label><br>
<Textarea name="mobile" value="<?php echo $usersdataa['mobile'] ?>"></Textarea>
<br><br>
<label>Password</label><br>
<Textarea name="password"value="<?php echo $usersdataa['password'] ?>"></Textarea>
<br><br>
<button type="submit" name="dataupdate">Update</button>
</form>

</body>
</html>