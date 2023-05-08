<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   
   <?php
   $conn =  mysqli_connect('localhost','root','','ram');

if(isset($_POST['submit']))

{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    mysqli_query($conn,"insert  into  users (name,gender,dob,email,mobile,password) value ('$name','$gender','$dob','$email','$mobile','$password' )");
}



   ?>
   

   
   <style>
        input[type=text]{
            width: 75%;
            padding: 9px;
            margin: 5px 0;
            border: 1px solid #000000;
            outline: none;
            
        }
        input[type=text]:focus {
            background-color: lightblue;
        }

        input[type=date]{
            width: 75%;
            padding: 9px;
            margin: 7px 0;
            border: 1px solid #000000;
            outline: none;
        }
        input[type=date]:focus {
            background-color: lightblue;
        }
        input[type=email]{
            width: 75%;
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
        input[type;=text]:focus {
            background-color: lightblue;
        }
        input[type=radio]{
            width: 5%;
            margin: 5px 0;
        }
        .abc{
        background:pink;
        }
    </style>
</head>
<body>
    
    <form class="abc" action="#" method="post">
        Name:<input type="text" name="name"><br>
        Gender:<input type="text" name="gender"><br>
        DOB:-<input type="date" name="dob"><br>
        Email:-<input type="email" name="email"><br>
        Mobile:-<input type="number" name="mobile"><br>
        Password:-<input type="password" name="password"><br>
        <button type="submit" name="submit"> Sign up</button><br>
        
    </form>
</body>
</html>