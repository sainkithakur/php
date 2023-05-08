<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreget Password</title>
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
            height: 500px;
            border: 2px solid #ccc;
            background: #fff;
        }

        h1 {
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
           width: 95%;

        }

        button:hover{
            opacity: .7;
           
        }


</style>




</head>
<body>



<form method="post" action="">
<h1>Change Password</h1>
<label for="newPassword">New Password:</label>
<input type="password" id="newPassword" name="newPassword" title="New password" />

<label for="confirmPassword">Confirm Password:</label>
<input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" />

<label for="token">Pasword Confirm:</label>
<input type="text" id="token" name="token" title="Password Token" />

<p class="form-actions">
<button type="submit" value="Change Password"> Change password </button>
</p>

</form> 
</body>
</html>

<?php

//newPassword = Request["newPassword"];
//confirmPassword = Request["confirmPassword"];
//token = Request["token"];
//if IsPost
//{
    
  //  retunValue = ResetPassword(token, newPassword);
//}

