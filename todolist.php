<?php
$dbconn = mysqli_connect("localhost","root","","todo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>


<style>
.aa{
  background: #000;
  color:white;
}





</style>



    <table border="1" width="1000" >
        <tr>
            <td class="aa"> S. No</td>
            <td class="aa">Title</td>
            <td class="aa">Date time</td>
            <td class="aa">Description</td>
            <td class="aa">Action</td>
        </tr>
<?php
$i = 1;
$taskdata = mysqli_query($dbconn,"select * from tasks");
while($taskdataa= mysqli_fetch_array($taskdata))
{
?>

        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $taskdataa['title'] ?></td>
            <td><?php echo $taskdataa['datetime'] ?></td>
            <td><?php echo $taskdataa['description'] ?></td>
            <td><a href="todoedit.php?id=<?php echo $taskdataa['id']; ?>"><button>Edit</button></a>
            <a href="tododelete.php?id=<?php echo $taskdataa['id']; ?>"><button>Delete</button></a>
        </td>
        </tr>

        <?php  } ?>
    </table>
</body>
</html>