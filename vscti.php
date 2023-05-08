<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   
   <?php
   $conn = mysqli_connect('localhost','root','','ram');

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
            height: 600px;
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
    
    <center><b><h1 class="ab"> VSCTI MORENA</b></h1></center>
    <center><b><h3 class="ab">Rasistration Form<b><h3><center>
    
    <form class="abc" action="#" method="post">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Gender</label>
        <input type="text" name="gender"><br>
        <label>DOB</label>
        <input type="date" name="dob"><br>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Mobile</label>
        <input type="number" name="mobile"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <button type="submit" name="submit"> Submit</button><br>
        
    </form>
    </div>
</body>
</html>