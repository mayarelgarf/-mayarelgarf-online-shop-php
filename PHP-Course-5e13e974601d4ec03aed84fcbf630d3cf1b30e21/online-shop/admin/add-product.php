<?php
define('BASE_PATH', '../');
require_once('../logic/products.php');
require_once('../logic/categories.php');
require_once('../layouts/header.php');
$products = getProducts();
$categories = getCategories()
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


  <div class="container-fluid">
    <form>
      <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control"  placeholder="speakers">
      </div>
      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="number" class="form-control" >
      </div>


      <div class="mb-3">
        <label for="formFile" class="form-label">Enter image url</label>
        <input class="form-control" type="file" id="formFile">
      </div>

      <select class="form-select" aria-label="Default select example">
        <option selected>category</option>
        <?php foreach ($categories as $category) { ?>
          <option value="1"><?= $category['name'] ?></option>
          <?php
        } ?>

      </select>
<br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
<?php
require_once('../layouts/header.php'); ?>