<?php 
$conn = mysqli_connect("localhost","root","","facebook");

if(isset($_POST['submit']))
{
  $a = $_POST['firstname'];
  $b = $_POST['surname'];
  $c = $_POST['email'];
  $d = $_POST['password'];
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  $gen = $_POST['gender'];
  

  $query = mysqli_query($conn,"insert into users(firstname,surname,email,password,day,month,year,gender) values ('$a','$b','$c','$d','$day','$month','$year','$gen')");
 
  $insertid = $conn->insert_id;
if($query)
{
   session_start();
  $_SESSION['LOIGINUSER'] = $insertid;
  header("Location:fbprofile.php");

}
else{
  echo "Registration Failed";
}
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
input[type="radio"] {
  appearance: none;
  background-color: #fff;
  margin-left: 10px;
  font: inherit;
  color: currentColor;
  width: 1.15em;
  height: 1.15em;
  border: 2px solid currentColor;
  border-radius: 7px;
}


.h2{
  margin-left: 10px;
}
input {
           margin-left: 10px;
          
           border-radius: 7px;
            width: 45%;
            height: 45px;
}      
.span{
  width:20%;
}
.cm{
  margin-left: 10px;
  margin-top:10px;
}
.sss{
  font-size: 12px;
  color: gray;
  margin-left: 30px;
}

.link1
   {
    text-align: center;
    background:#36a420;
    width:43%;
    margin-top:20px;
    padding:8px;
    border-radius:7px;
    margin-left: 120px;
    color:white;
    border:none;
   }  
  
.date{
  width: 30%;
    border-radius: 7px;
    height: 40px;
    margin-top: -5px;
    margin-left: 10px;
}
.abc{
  text-decoration: none;
}

body{
  background-color:white;
}
.modal-contant{
height: 600px;
    width: 500px;
    margin-top: 120px;
    margin-left: 250px;
}
@media screen and (min-width:500px) and (max-width:1000px)
{
body{
  width:auto;
  background-color:skyblue;
}
input[type="radio"] {
  appearance: none;
  background-color: gray;
  margin-left: 10px;
  font: inherit;
  color: currentColor;
  width: 1.15em;
  height: 1.15em;
  border: 2px solid currentColor;
  border-radius: 7px;
}
.date{
  width: 30%;
    border-radius: 7px;
    height: 40px;
    margin-top: -5px;
    margin-left: 10px;
background-color:red;
}

.modal-contant{
  height: 600px;
    width: auto;
    margin-top: 120px;
    margin-left: 250px;
    background-color:dark skyblue;
}
}
  </style>






</head>
<body>

<div class="container">
  
  <!-- Modal -->
  
    
      <!-- Modal content-->
      <div class="modal-content" style="
   
">
       
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" style=" margin-left: 10px; ">Sign Up</h2>
          <p class="gh" style="margin-left: 10px;">It's quick and easy.</p>
          <hr>
          <form method="POST">
          <input type="text" name="firstname" id=""  placeholder="First name" class="xyz">
        <input type="text" name="surname" id="" placeholder="Surname"> 
        <input type="text" name="email" id=""  placeholder="Email Address Or Phone number" style="width:92%; margin-top: 10px;">
        <input type="password" name="password" id="" placeholder="Password" style="width:92%; margin-top: 10px;">
        <p class="cm">Date of birth</p>
       <select class="date" name="day">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
  </select>
        <select class="date" name="month">
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
        <option>Apr</option>
        <option>May</option>
        <option>Jun</option>
        <option>July</option>
        <option>Aug</option>
        <option>Sept</option>
        <option>Oct</option>
        <option>Nov</option>
        <option>Dec</option>
        </select>
        <select class="date" name="year">
        <option>1950</option>
        <option>1951</option>
        <option>1952</option>
        <option>1953</option>
        <option>1954</option>
        <option>1955</option>
        <option>1956</option>
        <option>1957</option>
        <option>1958</option>
        <option>1959</option>
        <option>1960</option>
        <option>1961</option>
        <option>1962</option>
        <option>1963</option>
        <option>1964</option>
        <option>1965</option>
        <option>1966</option>
        <option>1967</option>
        <option>1968</option>
        <option>1969</option>
        <option>1970</option>
        <option>1971</option>
        <option>1972</option>
        <option>1973</option>
        <option>1974</option>
        <option>1975</option>
        <option>1976</option>
        <option>1977</option>
        <option>1978</option>
        <option>1979</option>
        <option>1980</option>
        <option>1981</option>
        <option>1982</option>
        <option>1983</option>
        <option>1984</option>
        <option>1985</option>
        <option>1986</option>
        <option>1987</option>
        <option>1988</option>
        <option>1989</option>
        <option>1990</option>
        <option>1991</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        <option>2007</option>
        <option>2008</option>
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        

  </select>
   
    <p class="cm">Gender</p>
    <div class="row">
      <div class="col-md-4">
        <div  style="border:1px solid;padding-top:10px;padding-bottom:3px;    border-radius: 7px;text-align:center;font-size:17px;width: 150px;margin-left:10px;">Male <input type="radio" name="gender" value="male"></div>
      </div>
      <div class="col-md-4">
        <div  style="border:1px solid;padding-top:10px;padding-bottom:3px;     border-radius: 7px;text-align:center;font-size:17px;">FeMale <input type="radio" name="gender" value="female"></div>
      </div>
      <div class="col-md-4">
        <div  style="border:1px solid;padding-top:10px;padding-bottom:3px;     border-radius: 7px; text-align:center;font-size:17px;margin-right:10px;">Custom <input type="radio" name="gender" value="custom"></div>
      </div>
    </div>

</lable>
    <p class="sss">People who use our service may have uploaded your contact information to<br> Facebook  <a href=""class="abc">Learn more.</a> </p><br>
    <p class="sss">By clicking Sign Up, you agree to our  <a href=""class="abc">Terms, Privacy Policy</a> and  <a href=""class="abc">Cookies Policy.</a><br> You may receive SMS notifications from us and can opt out at any time.</p>

   
   <a href=""> <button type="submit" id="" name="submit"  class="link1"> Sign Up</button></a>

   </form>
       
      </div>
      
    </div>
 

</body>
</html>
