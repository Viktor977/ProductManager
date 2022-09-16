<?php include 'head.php';?>
<body>
<div class="container">
    <header class="header">
        <span class="fs-4">Product List</span>
        <div class="nav">

            <button type="button" class="btn btn-outline-primary m-3" onclick="toProduct()"> ADD </button>
            <button type="submit" class="btn btn-outline-danger m-3" id="#delete-product-btn" onclick="deleteProducts()">MASS DELETE</button>
        </div>
    </header>
    <div> <hr/></div>
    <main>
        <?php include('form.php') ?>
    </main>
    <?php include ('footer.php');?>
