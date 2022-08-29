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

    <span class="fs-4">Product Add</span>
    <div class="nav">

        <button type="button" class="btn btn-outline-primary m-3" onclick="addProduct()">Save</button>
        <a class="btn btn-outline-danger m-3" href="index.php" >Cansel</a>
    </div>

</header>
<hr/>

<form>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">SKU</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Price ($)</label>
        <div class="col-sm-3">
            <input type="number" class="form-control" >
        </div>
    </div>
    <br/>

    <!--
    <label  class="col-sm-2 col-form-label">Type Switcher</label>
    <div class="dropdown">

        <button class="btn btn-outline-primary dropdown-toggle" type="button" >
            Type switcher
        </button>
        <ul class="dropdown-content">
            <button class="btn btn-outline-primary" >Mybook</button>
            <li><a  href="#">DVD</a></li>
            <li><a class="dropdown-item" href="#">Book</a></li>
            <li><a class="dropdown-item" href="#">Furniture</a></li>
        </ul>
    </div>
    -->
    <label  class="col-sm-2 col-form-label">Type Switcher</label>
    <select class="form-select form-select sm-3" >
        <option selected>Type Switcher</option>
        <option value="1">DVD-disc</option>
        <option value="2">Book</option>
        <option value="3">Furniture</option>
    </select>

</form>


</div>
<footer>
    <hr/>
    <p>Scandiweb Test assignment</p>
</footer>
</body>
</html>
