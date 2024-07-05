<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
        <div>
                <form method="POST" action="add.php">
                        <label>Hotel Room: </label><input type="text" name="hotelroomname">
                        <label>Price: </label><input type="text" name="roomeprice">
                        <input type="submit" name="add">
                </form>
        </div>
        <br>
        <div>
                <table border="1">
                        <thead>
                                <th>ID</th>
                                <th>Hotel Room</th>
                                <th>Price</th>
                                <th></th>
                        </thead>
                        <tbody>
                                <?php
                                        include('conn.php');
                                        $query=mysqli_query($conn,"select * from `hotels`");
                                        while($row=mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['hotelroomname']; ?></td>
                                                        <td><?php echo $row['roomprice']; ?></td>
                                                        <td>
                                                                   
                                                                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </td>
                                                </tr>
                                                <?php
                                        }
                                ?>
                        </tbody>
                </table>
        </div>
</body>
</html>