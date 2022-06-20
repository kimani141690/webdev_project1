
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>category table</title>
    <link rel="stylesheet" href="category.css">
</head>

<body>

    
    <div class="header">
        <h1> ALEXAWEAR<sup><small>TM</small></sup></h1>
        <h1> CATEGORY FORM</h1>

    </div>
    <br />
    <br />

    <form form action="category_process.php" method="post">
        <div class="category_name">
            <label for="category">Category Name</label>
            <input type="text" name="category_name" id="category" placeholder="category" required>
        </div>
        <br />
        <br />

        <div class="Category_id">
            <label for="category_id">Category Id</label>
            <input type="text" name="category_id" id="category_id" placeholder="category ID" required>
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