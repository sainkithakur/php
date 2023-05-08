<?php
session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
   
   <?php
   $conn =  mysqli_connect('localhost','root','','ram');

if(isset($_POST['submit']))

{
    $email = $_POST['email'];
   
    $password = $_POST['password'];


    $q =  mysqli_query($conn,"select * from   users where email='$email' and password = '$password' ");


    if($q->num_rows > 0)
    {
        echo "login successfully";
        $_SESSION ['user_name'] = $email;
        
        header("Location:valist.php");
    }
    else{
        echo "login failed";
    }
}



   ?>
   
   <a herf="profile.php"></a>
   
   <style>
        
      
        
        
        body {
            background: #1690a7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           
            
        }
        *{
            font-family: sans-serif;
            box-sizing: border-box;
        }

        form {
            width: 400px;
            height: 400px;
            border: 2px solid #ccc;
            background: #fff;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px;
            
           
        }
        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
           
        }
        label {
            color: #888;
            font-size: 18px;
            padding: 10px;

        }
        button {
            float: left;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
           border: none;

        }

        button:hover{
            opacity: .7;
        }

    </style>
</head>
<body>
    <div class="container">
    
    
    
    <center><form class="abc" action="#" method="post">
        <h2>LOGIN</h2>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <button type="submit" name="submit"> Login</button><br>
        <a href="ab.php">Foreget Password</a>
    </form></center>
    </div>
</body>
</html>