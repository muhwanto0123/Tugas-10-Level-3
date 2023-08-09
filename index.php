<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
<a href="add.php">Add New Users</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
        </tr>
        <?php
            while($user_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['mobile']."</td>";
                echo "<td>".$user_data['email']."</td>";    
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
            } 
            
        ?>
    </table>
</body>
</html>