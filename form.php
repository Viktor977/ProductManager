<?php include ('products.php');?>
<?php if (empty($products)): ?>
    <p class="lead mt-3">There are no products</p>
<?php endif; ?>
<?php foreach ($products as $item): ?>
    <div class="mycard">
        <input type="checkbox" class="delete-checkbox" />
            <div class="card_body">
              <?php echo $item->PrintProduct()?>
            </div>
    </div>
<?php endforeach;?>

<?php

