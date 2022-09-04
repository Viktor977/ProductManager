<?php
include ('fetchproducts.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/media.css">
</head>
<body>
<div class="container">
    <header class="header">
        <h2>Product List</h2>
        <div class="nav">
            <button class="container_btn">
                <a  href="addproduct.php" >ADD</a>
            </button>
            <button type="button" class="container_btn" >MASS DELETE</button>
        </div>
    </header>
    <hr/>
    <main>
        <?php
           if (empty($products)): ?>
             <p class="lead mt-3">There are no products</p>
           <?php endif; ?>

           <?php foreach ($products as $item): ?>
           <div class="card">
               <input type="checkbox" class="card_check"  >
               <br/>
               <?php echo $item->Print()?><br/>
           </div>
        <?php endforeach;?>
    </main>
<footer>
    <hr/>
    <p>Scandiweb Test assignment</p>
</footer>
</div>
</body>
</html>

