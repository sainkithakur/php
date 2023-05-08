 <?php
 include "vsctilog.php";
 ?>

 <?php
 $row=mysqli_fetch_assoc($q);

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            width: 600px;
            height: 450px;
            border: 2px solid #ccc;
            background: black;
            margin-top: 30px;
            color:white;
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
            font-size: 25px;
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
        img {
            width: 100px;
            height: 150px;
        }

    </style>

</head>
<body>
<div class="container">
    
    
    
<center> <form class="abc" action="#" method="post">
      <img src="image/WhatsApp Image 2023-01-03 at 10.09.09 AM.jpeg" class="imgset"><br>
    <label>Name           : Dheerendra Kirar</label><br>
    <label>Father's Name : Dhruv Singh</label><br>
    <label>Mobile        : 9575881385</label><br>
    <label>Pincode       : 476444</label><br>
    <label>Email         : sainkithalur04@gmail.com</label><br>
    <label>Address       : Phoolgung Banmore</label><br>
        <br>
    <label>Distt         : Morena</label>
       
    </form>
    </center>
    </div>
</body>
</html>