<?php

require("connect.php");
 if(isset($_GET['pID']))
 {
    $id=$_GET['pID'];
    $delete=mysqli_query($conn,"DELETE FROM `products` WHERE 'pID'='$id'");
 }

$query = "SELECT* FROM products";
        $query_run = mysqli_query($conn, $query);
?>

<html>

<head>
    <title>view products</title>
    <link rel="stylesheet" href="displayimage.css">
</head>

<body>

    <table>

        <tr class="headers">
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product ID</th>
            <th>Sub-category ID</th>
            <th>Descripton</th>
            <th>Price</th>
            <th>Stock Quantity</th>
            <th>Action</th>

        </tr>

        <?php
        
        $num=mysqli_num_rows($query_run);
        if ($num > 0) {
            while ($row = mysqli_fetch_array($query_run)) {
        ?>
                <tr>
                    <td><?php echo '<img src="' . $row['imagePath'] . '" alt="image" style="width:100px; height:100px;">'; ?></td>
                    <td><?php echo $row['pName']; ?></td>
                    <td><?php echo $row['pID']; ?></td>
                    <td><?php echo $row['sub_category_ID']; ?></td>
                    <td ><?php echo $row['pDescription']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td ><?php echo $row['stockQty']; ?></td>
                    <td>
                        <a href="displayimage.php? id=<?php echo $row['pID']; ?>" class="btn">Delete</a>
                    </td>

                </tr>
        <?php
            }
        }
        ?>

    </table>



</body>

</html>