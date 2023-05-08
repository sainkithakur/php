<?php
 $conn =  mysqli_connect('localhost','root','','ram');
 if(isset($_POST['login']))
 {
     $email = $_POST['email'];
     $password = $_POST['password'];
 
     $q =  mysqli_query($conn,"select * from fb where email='$email' and password='$password'");
 
     if($q->num_rows > 0 )
     {
         $fbdata = mysqli_fetch_array($q);
        session_start();
       $_SESSION['LOIGIfb'] = $fbdata['id'];
       header("Location:liteprofile.php");
     
     }
     else{
       echo "Registration Failed";
     }
     
     
     }
     
     
     ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  
    <title>Facebook</title>

   



    <style>
        
      
        
        
        body {
            
    background-color :#f0f2f5 ;
    
}
           
            .container{
                position: absolute;
                top: 18%;
                left:14%;
                font-size: 32px;
            }
        .container h1{
            color: #2c83f2;
        }
        *{
            margin: 0;
            padding: 0;
        }

        header {
            width: 400px;
            height: 370px;
            box-shadow: 0px 4px 16px 0px grey;
            
            background-color:white;
            left: 791px;
            top: 98px;
            position: absolute;
        }

        
        h1 {
            text-align: center;
            margin-bottom: 5px;
            padding: 18px;
            font-family:  Helvetica, Arial, sans-serif;
           font-size: 48px;
           margin-right: 250px;
        }
        .box input {
           margin-left: 21px;
           margin: 10px;
           border-radius: 7px;
            width: 80%;
            padding: 17px 18px;
            margin-top: 18px;
    
           
        }
        .link {
           
            background-color: #2c83f2;
            padding: 10px ;
            text-align: center;
            border-radius: 7px;
            margin-top: 10px;
            margin-left: 20px;
          
        }
  .link a
   {
      text-decoration:none;
      color: white;
      font-size: 25px; 
   } 
   .LINK2 {
    text-align: center;
    margin-top: 17px;
   
   }     
   .link2 a{
    text-decoration: none;
    color: #2c83f2;
    margin-left: 120px;  
   }
   .abc{
    width: 90%;
    margin-left: 20px;
   }
  
       

   button
   {
    text-align: center;
    background:#36a420;
    width:50%;
    margin-top:20px;
    padding:13px;
    border-radius:7px;
    margin-left: 90px;
   }  
   .button a
   {
      text-decoration:none;
      color:white;
      font-size:20px; 
   } 
.www{
    font-family:  Helvetica, Arial, sans-serif;
    font-size:28px;
}
.ram{
    padding: 40%;
    display: flex;
}

button:hover{
            opacity: .7;
        }
       
.endbox{
    background-color:white;
    width: 100%;
    height: 200px;
}
.rrr{
    color:gray;
    margin-left: 330px;
    margin-top:50px;
    font-size: 15px;
}
.sss{
    color:gray;
    margin-left: 330px;
    margin-top:20px;
    font-size: 15px;
}


    </style>
</head>
<body>
<div class="container ">
   
   <h1>Facebook</h1>
   
   <p class="www">Facebook   helps you connect and share<br> with the people in your life.</p>
   
    </div>
<header>
    <div class="box">
        <form method="POST">
            
        <input type="email" name="email" id=""  placeholder="Email Address Or Phone number" class="xyz"><br><br>
        <input type="password" name="password" id="" placeholder="Password"> <br>
        </div>
        
        <button type="submit" name="login" value="login" style="
    background-color: blue;
"> Login</button>
       <div class="link2">
        <a href="">Foreget Password?</a><br><br>
        </div>
        <hr class="abc">
        <a href="litecreat.php"><button type="button" name="btn2" value=""> Creat New Account</button></a>
        </form>
       
    </div>
</header>
</div>
<p class="note" style="
    margin-top: 487px;
    margin-left: 826px;
">Create a Page for a celebrity, brand or business.</p><br><br><br>

<footer>
    <div class="endbox">
<p class="rrr">English (UK)
हिन्दी  मराठी  اردو  ਪੰਜਾਬੀ  বাংলা  ગુજરાતી  தமிழ்  తెలుగు  മലയാളം  ಕನ್ನಡ
<hr>
<p class="sss">Sign   UpLog   inMessenger  FacebookLite  Watch  PlacesGames  Marketplace  Meta PayOculus Portal  Instagram  Bullet  inFundraisers <br>  Services  Voting Information CentrePrivacy PolicyPrivacy CentreGroupsAboutCreate adCreate Page  Developers   Careers  Cookies  AdChoices <br> Terms  Help   Contact uploading and non-users  Settings  Activity log
<br>Meta © 2023</p>


    </div>
</footer>
</body>
</html>