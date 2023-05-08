(<?php
session_start();

$dbconn = mysqli_connect("localhost","root","","ram");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valist</title>
</head>
<body>

<center><b><h1 class="heding"> Shri Ram Technologies</h1></b></center>
    
<table border="1" width="1000" style="color:green;" >
        <tr style="background:black;">
            <td class="aa"> S. No</td>
            <td class="aa">Name</td>
            <td class="aa">Gender</td>
            <td class="aa">DOB</td>
            <td class="aa">Email</td>
            <td class="aa">mobile</td>
            <td class="aa">password</td>
            <td class="aa">edit</td>
        </tr>
<?php
$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else
{
header('location:vsctilog.php');
}

$i = 1;
$usersdata = mysqli_query($dbconn,"select * from users");
while($usersdataa= mysqli_fetch_array($usersdata))
{
?>

        <tr style="background:skyblue; color:black;" >
            <td><?php echo $i++ ?></td>
            <td><?php echo $usersdataa['name']; ?></td>
            <td><?php echo $usersdataa['gender'] ?></td>
            <td><?php echo $usersdataa['dob'] ?></td>
            <td><?php echo $usersdataa['email'] ?></td>
            <td><?php echo $usersdataa['mobile'] ?></td>
            <td><?php echo $usersdataa['password'] ?></td>
           
            <td><a href="vaedit.php?id=<?php echo $usersdataa['id']; ?>"><button style="background:blue";> Edit</button></a>
            <a href="vadelete.php?id=<?php echo $usersdataa['id']; ?>"><button style="background:blue";>Delete</button></a>
        </td>
        </tr>

        <?php  } ?>
    </table>
</body>
</html>