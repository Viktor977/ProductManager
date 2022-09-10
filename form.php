<?php include ('products.php');?>
<?php if (empty($products)): ?>
    <p class="lead mt-3">There are no products</p>
<?php endif; ?>
<?php foreach ($products as $item): ?>
    <div class="card">
        <input type="checkbox" class="delete-checkbox"  >

        <?php echo $item->PrintProduct()?>
    </div>
<?php endforeach;?>
<?php

