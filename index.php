<?php
include 'config/database.php';
$sql = 'SELECT * FROM dvd';
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php
include ('Models/Product.php');
include ('Models/Book.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="container">
    <header class="header">
        <span class="fs-4">Product list</span>
        <div class="nav">
            <a class="btn btn-outline-primary m-3" href="addproduct.php" >ADD</a>
            <button type="button" class="btn btn-outline-danger m-3" onclick="addProduct()">MASS DELETE</button>
        </div>
    </header>
    <hr/>
    <main>
        <?php if (empty($products)): ?>
            <p class="lead mt-3">There are no products</p>
        <?php endif; ?>

        <?php foreach ($products as $item): ?>
        <div class="card">

                <input type="checkbox" class="form-check-input m-l-5" >
                <br/>
                <?php echo $item['name']?><br/>
                <?php echo $item['price']; ?><br/>

                <?php echo $item['sku']?><br/>
                <?php echo $item['size']?>
        </div>

     <?php endforeach;?>

</main>
    <?php
    $book=new Book();
    $book->SKU='SKU+qwerty';
    $book->Price='3000';
    $book->Weight="10";
    $book->PrintBook();
    ?>
<footer>
    <hr/>
    <p>Scandiweb Test assignment</p>
</footer>
</div>
<script src="JS/app.js"></script>
</body>
</html>

