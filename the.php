<?php
$conn =  mysqli_connect('localhost','root','','ram');
session_start();
if(isset($_REQUEST['username']) || isset($_REQUEST['password'])){
$uname = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$_SESSION['uname'] = $uname;
$_SESSION['pass'] = $pass;


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        input[type=text]{
            width: 30%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #000000;
            outline: none;
            
        }
        input[type=text]:focus {
            background-color: lightblue;
        }

        input[type=date]{
            width: 30%;
            padding: 9px;
            margin: 7px 0;
            border: 1px solid #000000;
            outline: none;
        }
        input[type=date]:focus {
            background-color: lightblue;
        }
        input[type=email]{
            width: 30%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #000000;
            outline: none;
        }
        input[type=email]:focus {
            background-color: lightblue;
        }

            input[type=number]{
                width: 25%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #000000;
            outline: none;
        }
        input[type=number]:focus {
            background-color: lightblue;
        }
        input[type=password]{
            width: 25%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #000000;
            outline: none;
        }
        input[type=password]:focus {
            background-color: lightblue;
        }

        input[type=submit]{
            width: 10%;
            padding: 10px;
            box-sizing: border-box;
            margin: 5px 0;
            background-color: blue;
            color: white;
            border: 2px solid #000000;
            outline: none;
        }
        text {
            background-color: lightblue;
        }
        
        .abc{
        background:pink;
        }
        .ab{
            background-color:black;
            color:white;
        }
        
    </style>
<body>
    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">
            Register Form For Events
    </h1>
    <div class="col-lg-8 m-auto d-block">
    <form action="upload.php" method="POST">
        <div class="form-group">
        Username: <input type="text" name="username" id="username"><br><br>
        Password: <input type="text" name="password" id="username"><br><br>
        <input type="submit" value="Login" name="login">
    </div>
</form>
    </div>
</div>
</body>
</html>