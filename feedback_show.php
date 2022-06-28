<?php

include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>select query</title>
    <style>
td{
    width:100px;
    }
</style>
</head>
<body>
<table align="center" border="1px solid">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>message</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
 <?php
    include("conn.php");

        $select="select * from feedback";
        $result=mysqli_query($conn,$select);
        while($row=mysqli_fetch_array($result))
        {
            ?>

        <tr>
            
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['message'];?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>"></a></td>

                <td><a href="delete.php?id=<?php echo $row['id'];?>"></a></td>

        </tr>
        <?php
        }
?>
</table>
</body>
</html>

<?php
include("footer.php");
?>