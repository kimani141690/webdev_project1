<?php

require("connect.php");

$sql = "SELECT * FROM category";
$all_ctgr = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexawear subcategory page</title>
    <link rel="stylesheet" href="sub_category.css">
</head>

<body>



    <div class="header">
        <h1> ALEXAWEAR<sup><small>TM</small></sup></h1>
        <h1> SUB-CATEGORY FORM</h1>

    </div>
    <br />
    <br />

    <form form action="process_subcategory.php" method="post">
       
        <div class="sub-category_name">
            <label for="sub_category_name">Sub-category Name</label>
            <input type="text" name="sub_category_name" id="sub_category_name" placeholder="sub-category Name" required>
        </div>
        <br />
        <br />
        <div class="sub-category_id">
            <label for="sub_category_name">Sub-category ID</label>
            <input type="text" name="sub_category_id" id="sub_category_id" placeholder="sub-category ID" required>
        </div>
        <br />
        <br />
        <div class="Category_id">
            <label for="category_id">Category Id</label>
            <select name="category_id" id="category_id">
            <?php
                while($category = mysqli_fetch_assoc($all_ctgr)):;
            ?>
            <option value="<?php echo $category["categoryID"];
            ?>">
            <?php echo $category["categoryName"];
            ?>
               
            </option>
            <?php
                endwhile;
            ?>
        </select>

        </div>
        <br />
        <br />

        

        <div class="buttons">
            <Button type="submit">ADD CATEGORY</Button>
            <Button type="reset">NEW CATEGORY</Button>

        </div>





    </form>

</body>

</html>