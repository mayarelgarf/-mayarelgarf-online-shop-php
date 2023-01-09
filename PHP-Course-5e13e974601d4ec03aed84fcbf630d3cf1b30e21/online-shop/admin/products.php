<?php
define('BASE_PATH', '../');
require_once('../logic/products.php');
require_once('../layouts/header.php');
$products = getProducts();

//var_export($products);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <a class="btn btn-primary btn-lg" href="add-product.php">Add product</a>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">IMAGE</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                ?>
                <tr>
                    <td class="align-middle"><?= $product['id'] ?></td>
                    <td class="align-middle">
                        <?= $product['name'] ?>
                    </td>
                    <td class="align-middle" ><img src="../<?= $product['image_url'] ?>" width="150" height="150" /></td>
                    <td class="align-middle">
                        <?= $product['category_name'] ?>
                    </td>
                    <td class="align-middle"><?= $product['price'] ?></td>
                    <td class="align-middle" >
                        <?=$product['price'] *$product['discount'] ?>
                    </td>
                    <td class="align-middle" ><a href="#" class="btn btn-success" >edit</a></td>
                    <td class="align-middle" ><a href="#" class="btn btn-danger" >delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>
<?php 
require_once('../layouts/footer.php');?>
