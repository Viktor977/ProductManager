<?php
include 'config/database.php';
include 'Models/ProductCreator.php';

$sql_b= 'SELECT * FROM books';
$sql_f="SELECT * FROM furniture";
$sql_d="SELECT * FROM dvd";

$products=array();
$creator=new ProductCreator();

$result = mysqli_query($conn, $sql_b);
$books = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);

foreach ($books as $book){
    $item=$creator->createBook();
    $item->Id=$book['id'];
    $item->SKU=$book["sku"];
    $item->Price=$book['price'];
    $item->Title=$book['title'];
    $item->Weight=$book['weight'];
    array_push($products,$item);
}

$result=mysqli_query($conn,$sql_f);
$furnitures=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);

foreach ($furnitures as $furniture){
    $item=$creator->createFurniture();
    $item->Id=$furniture['id'];
    $item->SKU=$furniture["sku"];
    $item->Title=$furniture['title'];
    $item->Price=$furniture['price'];
    $item->length=$furniture['lenght'];
    $item->width=$furniture['width'];
    $item->height=$furniture['height'];
    array_push($products,$item);
}


$result=mysqli_query($conn,$sql_d);
$dvds=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

foreach ($dvds as $dvd){
    $item=$creator->createDvd();
    $item->Id=$dvd['id'];
    $item->SKU=$dvd["sku"];
    $item->Title=$dvd['title'];
    $item->Price=$dvd['price'];
    $item->size=$dvd['size'];
    array_push($products,$item);
}

