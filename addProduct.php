<?php
include 'head.php';
?>

<body>
<div class="container">
    <header class="header">
        <span class="fs-4">Product Add</span>
        <div class="nav">
            <button type="submit"  class="btn btn-outline-primary m-3" onclick="addProduct()" > Send   </button>
            <a class="btn btn-outline-danger m-3" href="index.php" >Cansel</a>
        </div>
    </header>
    <hr/>
    <form method="post" id="product_form" action='products.php'>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" >SKU</label>
            <div class="col-sm-3">
                <input type="text" id="sku" name="sku" class="form-control" >
            </div>
        </div>
        <div class="mb-3 row">
            <label  class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-3">
                <input type="text" name='title' id="name" class="form-control" >
            </div>
        </div>
        <div class="mb-3 row">
            <label  class="col-sm-2 col-form-label" >Price ($)</label>
            <div class="col-sm-3">
                <input type="text" name='price' id="price"  class="form-control" >
            </div>
        </div>
        <div class="md-3 row">
            <label  class="col-sm-2 col-form-label"><span id="leb">Type Switcher</span></label>
            <div class="col-sm-3">
                <select  class="form-select form-select sm-3" id="productType" >
                    <option selected>Type Switcher</option>
                    <option value="dvd" id="dvd">DVD-disc</option>
                    <option value="book" id="book">Book</option>
                    <option value="furniture" id="furniture">Furniture</option>
                </select>
            </div>
        </div>
    </form>
    <div class="message">

    </div>
</div>
<?php include 'footer.php'?>

