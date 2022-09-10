<?php include 'head.php';?>
<body>
<div class="container">
    <header class="header">
        <span class="fs-4">Product List</span>
        <div class="nav">
            <a  class="btn btn-outline-primary" href="addProduct.php">ADD</a>
            <button type="submit" class="btn btn-outline-danger m-3"  onclick="deleteProducts()">MASS DELETE</button>
        </div>
    </header>
    <div> <hr/></div>
    <main>
        <?php include('form.php') ?>
    </main>
    <?php include ('footer.php');?>
