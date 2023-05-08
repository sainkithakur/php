<?php 
$conn = mysqli_connect("localhost","root","","facebook");
session_start();
$loginuserid = $_SESSION['LOIGINUSER'];
if($loginuserid=="");
 
//echo $loginuserid;

$userdata = mysqli_fetch_array(mysqli_query($conn,"select * from users where id='$loginuserid'"));
//var_dump($userdata);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fb.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Fb Profile</title>
</head>
<body>
  <div class="shadow">
    <div class="topheader">
      
        <div class="box1">
         
          <img src="image/Screenshot 2023-01-09 232908.png" class="icon">
          <form id="search-form">
            <div class="search" style="background-color: #f0f2f5;">
              <input type="text" placeholder="Search Facebook." class="round" />
             
            </div>
        </form>
              
               
           
          </div>
        
        <div class="box2">
          <img src="image/sc1.png" class="set">
          <img src="image/sc2.png" class="set">
          <img src="image/sc3.png" class="set">
          <img src="image/sc4.png" class="set">
          <img src="image/gaming.png" class="set">
        </div>
        <div class="box3">
          <div class="mini">
          <img src="image/9dots.png" class="se">
          <img src="image/messanger.png" class="se">
          <img src="image/notification.png" class="se">
          <img src="image/profile.png" class="se">
        </div>
        </div>
    </div>
    <div class="box4">
      <div class="container-fluid" style="background-color: white;">

        <img src="image/dp.png" class="dp">
        <img src="image/sainki.jpg" class="found">
        <img src="image/2.jfif" class="cemra">
        <p class="name">सैंकी किरार खरगपुर</p>
        <p class="friend">3.6K friends        </p>
        <div class="box-5 ms-auto" style="
        display: flex; margin-left: 480px;
    ">  
            <img src="image/1111.jpg" class="f1">
           <img src="image/ggggg.jpg" class="f1">
         <img src="image/hhhhhh.jpg" class="f1">
      <img src="image/sainki4.jpg" class="f1">
    <img src="image/sainki2.jpg" class="f1">
    <img src="image/sainki6.jpg" class="f1">
     <img src="image/sainki7.jpg" class="f1">
          
        </div>  
        <div class="box9" style="display: grid;">
          <button type="submit" name="submit" value="submit" style="margin-left: 954px; font-weight: bold;color:white; text-decoration:none;font-size:20px; text-align: center; "> Add to story</button>
          <button type="submit" name="submit" value="submit" style="margin-left: 389px; font-weight: bold;color:black; text-decoration:none;font-size:20px; text-align: center;    margin-left: 1133px; margin-top: -36px; background-color: gray; "> Edit profile</button>
          <a href="logout.php"><button type="btn" name="button" class="btnset2"><img src="img/tmaz0VO75BB.png" class="img-fluid" style=""> log out</button></a>
        </div>
        
      </div>
    </div>
<div class="container">
  <hr>
  
<ul>
  <li><a class="active" href="#home">Posts</a></li>
  <li><a href="#news">About</a></li>
  <li><a href="#contact">Friends</a></li>
  <li><a href="#about">Photos</a></li>
  <li><a href="#about">Vedios</a></li>
  <li><a href="#about">Reels</a></li>
  <li><a href="#about">More</a></li>
</ul>
</div>
</div>
<div class="container-fluid" style="background-color: #f0f2f5;">
<div class="container" style="margin-top:20px;">
  <div class="row " style="display: flex;">
   
<div class="col- md-5 " style="background-color: white; margin-left:59px;">
  <p class="intro">Intro</p>
  <p class="status">जलन🔥 बरकरार तुम रखो जलवा😎 बरकरार मैं रखुंगा 💪<br>
    💜✌ ठा.धीरेंद्र ध्रुव सिंह किरार ☮♛</p>
    <button type="submit" name="submit" value="submit" style="margin-left: 19px; font-weight: bold;color:black; font-size:20px; text-align: center;    height:40px; margin-top: 6px;background-color:#f0f2f5 ;width:370px; "> Edit Bio</button>
    <img src="image/mamamamam.png" class="tt" style=" margin-left:-370px">
    <p class="chambal">चंबल माटी हमारी</p>
    <img src="image/mamamamam.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Shree Ram college Morena at College students</p>
    <img src="image/study.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Studied at DCA Diploma in computer application from<br> makhanlal chaturvedi univarsity bhopal</p>
    <img src="image/study.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Studied at Vaishnavi shorthand computer typing<br> Institute Morena
    </p>
    <img src="image/study.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Lives in Morena, India</p>
    <img src="image/homeee.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">From Banmore, Madhya Pradesh, India</p>
    <img src="image/location.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Banmore Morena</p>
    <img src="image/single.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Single</p>
    <img src="image/youtube.png" class="tt" style="margin-top:-45px;">
    <p class="chambal2">Sainki thakur</p>
    <button type="submit" name="submit" value="submit" style="margin-left: 19px; font-weight: bold;color:black; font-size:20px; text-align: center;    height:40px; margin-top: 6px;background-color:#f0f2f5 ;width:370px; "> Edit details</button>
    <img src="image/music.png" class="tt" style="margin-top:3px;margin-left:-366px;">
    <p class="chambal3">Listening to music</p>
    <button type="submit" name="submit" value="submit" style="margin-left: 19px; font-weight: bold;color:black; font-size:20px; text-align: center;    height:40px; margin-top: 6px;background-color:#f0f2f5 ;width:370px; "> Edit hobbies</button>
   
    <button type="submit" name="submit" value="submit" style="margin-left: 19px; font-weight: bold;color:black; font-size:20px; text-align: center;    height:40px; margin-top: 6px;background-color:#f0f2f5 ;width:370px; "> Add Featured</button>
   
</div>
<div class="container">
  <div class="row">
    <div class="shadow p-3">
<div class="shadow p-3">
 
<div class="col-md-7" style="background-color:white;margin-left:20px; width: 92.333333%;">
  <img src="image/profile.png" class="sms">
  <form id="search-form" style="
    width: 56%;
">
    <div class="search" style="">
      <input type="text" placeholder="What's on your mind ?" class="ground">
     
    </div>
   <b> <hr class="size"></b>
   <div class="box6">
    <img src="image/live.png" class="t2" style="margin-top:-45px;">
    <p class="chambal2">live video</p>
    <img src="image/photo.png" class="t3" style="margin-top:-118px;margin-left: 188px;">
    <p class="chambal6">Photos/video</p>
    <img src="image/event.png" class="t4" style="margin-top:-121px;margin-left: 396px;margin-bottom: -50px;">
    <p class="chambal7">live event</p>
   </div>
  </div>
  </div>
</div>
</div>
   <div class="container-fluid" style="
   margin-top: 23px;
">

 
    <div class="row" style="display: -webkit-inline-box;">
      <div class="col-12" style="background-color:white;">
        <div class="col-md-2">
  
    
    <p class="intro">Posts</p>
   </div>
  
  <div class="col-10" style="display: flex;margin-left:320px;margin-top:14;">
    <img src="image/filter.png">
    <img src="image/post.png">
        </div>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
          <img src="image/list.png" class="list" style="
              margin-top: 46px;
              margin-left: 0px;
          ">
          <img src="image/grid.png" class="list" style="margin-top: -45px;margin-left: 481px;">
          </div>
        </div>
      </div>
  </div>
  </div>
  <div class="container-fluid mb-2" style="
    margin-top: 30px; background-color:white;
">
    <img src="image/pg.png" style="">
    <p class="zzz">Aashu Pandit is feeling awesome with सचिन ठाकुर खरगपुर and 
    46 othersin Banmore, Madhya Pradesh, India.<br>
    8 January at 11:20  ·</p>
    <img src="image/ashu.png" style="width: 600px;">
   <hr class="size">
   <img src="image/likeee.jfif" class="qwe" style="
   width: 26px;
   height: 20px;
   margin-left: 100px;
">
<p class="lll" style="
    margin-left: 141px;
    margin-top: -18px;
    color: gray;
">Like</p>
<img src="image/comment.jfif" class="qwe" style="
width: 26px;
height: 20px;
margin-left: 358px;
margin-top:-60px ;
">
<p class="lll" style="
 margin-left: 410px;
 margin-top: -48px;
 color: gray;
">Comment</p>
<hr class="size">

 
  <img src="image/profile.png" class="sms">
  <form id="search-form" style="
    width: 56%;
">
    <div class="search" style="background-color: white;">
      <input type="text" placeholder="Write a Comment" class="ground">
    </div>
  </div>
</form>

   
</div>
    </div>
  </div>
  
  <div class="container">
    <div class="row" style="
    display: flex;
">
<div class="col-md-5" style="
margin-left: 24px;
background-color: white;
margin-top: 20px;
">
  <p class="intro" style="
margin-top: 10px;
">Photos</p>
  <a href="all" style="
/* margin-bottom: 55px; */
margin-left: 292px;
">See All Friends</a>
<img src="image/sainki.jpg" class="mmm">
<img src="image/sainki2.jpg" class="mmm">
<img src="image/sainki3.jpg" class="mmm">
<br>
<img src="image/sainki4.jpg" class="mmm">
<img src="image/sainki6.jpg" class="mmm">
<img src="image/sainki7.jpg" class="mmm">
<br>
<img src="image/sainki8.jpg" class="mmm">
<img src="image/sainki99.jpg" class="mmm">
<img src="image/saiki55.jpg" class="mmm">
 </div>
  
  
   
     <div class="col-md-7"
    style="
     margin-top: 30px; background-color:white;
 ">
     <img src="image/pg.png" style="">
     <p class="zzz">Aashu Pandit is feeling awesome with सचिन ठाकुर खरगपुर and 
     46 othersin Banmore, Madhya Pradesh, India.<br>
     8 January at 11:20  ·</p>
     <img src="image/banner.jpg" style="width: 600px;">
     <hr class="size">
     <img src="image/likeee.jfif" class="qwe" style="
     width: 26px;
     height: 20px;
     margin-left: 100px;
  ">
  <div class="box">
  <p class="lll" style="
      margin-left: 141px;
      margin-top: -18px;
      color: gray;
  ">Like</p>
  <img src="image/comment.jfif" class="qwe" style="
  width: 26px;
  height: 20px;
  margin-left: 358px;
  margin-top:-60px ;
  ">
  <p class="lll" style="
   margin-left: 410px;
   margin-top: -48px;
   color: gray;
  ">Comment</p>
  <hr class="size">
</div>
    </div>
    </div>
    
   
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="image/friendss.png" class="friend" style="
    width: 96%;
    margin-top: 20px;
    margin-left:23px;
">
      </div>
      <div class="col-md-7">

      </div>
    </div>
  </div>

</body>
</html>