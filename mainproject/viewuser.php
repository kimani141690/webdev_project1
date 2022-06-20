<?php
require("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Customers</title>
    <link rel="stylesheet" href="viewusers.css">
</head>

<body>
    <table>
        <tr>
            <th colspan="5">
                <h1>Customer Details</h1>
            </th>
        </tr>


        <tr>
            <th id="id">Customer Id</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Password</th>
            <th>Action</th>
        </tr>

        <?php

        $sql = "SELECT * FROM customer";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['customer_ID'] ?></td>
                    <td><?php echo $row['userName'] ?></td>
                    <td><?php echo $row['emailAddress'] ?></td>
                    <td><?php echo $row['customerPassword'] ?></td>
                    <td>
                        <button class="btn"><a href="#">EDIT</a></button>

                    </td>




                </tr>


        <?php
            }
        }
        ?>
    </table>
</body>

</html>