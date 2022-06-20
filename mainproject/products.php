<?php

require("connect.php");

$sql = "SELECT * FROM sub_category";
$all_ctgr = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alexawear product page</title>
    <link rel="stylesheet" href="products.css">
</head>

<body>
    <div class="header">
        <h1> ALEXAWEAR<sup><small>TM</small></sup></h1>
        <h1> PRODUCTS FORM</h1>

    </div>
    <br />
    <br />
    <form action="process_product.php" method="post" enctype="multipart/form-data">


        <div class="product_name">
            <label for="productName">Product Name</label>
            <br>
            <input type="text" name="product_Name" id="productName" placeholder="Product name" required>


        </div>

        <div class="product_id">
            <label for="productID"> Product ID</label>
            <br>
            <input type="text" name="productID" id="productID" placeholder="Product ID" required>
        </div>


        <div class="sub_category">
            <label for="subCategoryID"> Sub-category ID</label><br>
                       <select name="sub_category_id" id="subCategoryID"><br>
                <?php
        while($subcategory = mysqli_fetch_assoc($all_ctgr)):;
    ?>
                <option value="<?php echo $subcategory["sub_category_id"]; ?>">
                <?php
                     echo $subcategory["sub_category_name"];
                ?>

                </option>
                <?php
        endwhile;
    ?>
    
            </select>
            <br>
            <label for="stockQuantity">Stock Quantity</label><br>
            <input type="number" name="stockQuantity" id="stockQuantity" placeholder="avalable Quantity" required><br>



        </div>

        <div class="unit_price">


            <label for="price">Unit Price </label><br>
            <input type="number" name="price" id="price" placeholder="unit price" required><br>

        </div>



        <div class="time">
            <p>
                <label for="timeCreated">Created At</label><br />
                <input type="datetime-local" name=" timeCreated" id="timeCreated"  required>
            </p>

            <p>
                <label for="timeUpdated">New Update</label><br />
                <input type="datetime-local" name="timeUpdated" id="timeUpdated"  required>
            </p>
        </div>

        <div class="description">
            <label for="productDesc">Product Description</label><br>
            <textarea name="productDesc" id="productDesc" placeholder="product Description" required></textarea><br>
        </div>

        <div class="product_image">

            <label for="image">Image path</label>
            <br>
            <input type="file" name="imageFile" id="image" placeholder="Add product image path" required>
            </label>

        </div>


        <div class="buttons">
            <Button type="submit">ADD PRODUCT</Button>
            <Button type="reset">NEW PRODUCT</Button>



        </div>

    </form>



</body>

</html>