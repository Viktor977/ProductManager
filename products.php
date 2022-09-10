<?php
include_once ('datebase/MysqlStorage.php');
include_once ('classes/ProductCreator.php');

$dsn='mysql:host=localhost;dbname=products;charset=utf8';
$username='brad';
$password='1234';
$products=array();
$creator=new ProductCreator();
$dataBase=new MysqlStorage($dsn,$username,$password);
$books=$dataBase->getBooks();
$dvds=$dataBase->getDvds();
$furniture=$dataBase->getFurniture();

function fillBook(ProductCreator $creator):Book{
    $book =$creator->createBook();
    $book->SKU = $_POST['sku'];
    $book->Title = $_POST["title"];
    $book->Price = $_POST["price"];
    $book->Weight = $_POST["weight"];

    return $book;
};
function fillDvd(ProductCreator  $creator):Dvd{
    $dvd=$creator->createDvd();
    $dvd->SKU=$_POST["sku"];
    $dvd->Title=$_POST["title"];
    $dvd->Price=$_POST["price"];
    $dvd->size=$_POST["size"];

    return $dvd;
}
function fillFurniture(ProductCreator $creator):Furniture{
    $furniture=$creator->createFurniture();
    $furniture->SKU=$_POST["sku"];
    $furniture->Title=$_POST["title"];
    $furniture->Price=$_POST["price"];
    $furniture->height=$_POST["height"];
    $furniture->width=$_POST["width"];
    $furniture->length=$_POST["length"];
    return  $furniture;
}
if (isset($_POST['weight'])) {
    $book = fillBook($creator);
    $dataBase->addBook($book);
    header('location: index.php');

}
if(isset($_POST['size'])){
   $dvd=fillDvd($creator);
   $dataBase->addDvd($dvd);
   header('location: index.php');

}
if(isset($_POST['height'])){
    $furniture=fillFurniture($creator);
    $dataBase->addFurniture($furniture);
    header('location: index.php');

}

foreach ($books as $book) {
    $itemBook = $creator->createBook();
    $itemBook->Id = $book['id'];
    $itemBook->SKU = $book['sku'];
    $itemBook->Title = $book['title'];
    $itemBook->Price = $book['price'];
    $itemBook->Weight = $book['weight'];
    array_push($products, $itemBook);
}


foreach ($dvds as $dvd){
    $itemDvd=$creator->createDvd();
    $itemDvd->Id=$dvd['id'];
    $itemDvd->SKU=$dvd['sku'];
    $itemDvd->Title=$dvd['title'];
    $itemDvd->Price=$dvd['price'];
    $itemDvd->size=$dvd['size'];
    array_push($products,$itemDvd);
}

foreach ($furniture as $item){
    $itemFurniture=$creator->createFurniture();
    $itemFurniture->Id=$item['id'];
    $itemFurniture->SKU=$item['sku'];
    $itemFurniture->Title=$item['title'];
    $itemFurniture->Price=$item['price'];
    $itemFurniture->length=$item['length'];
    $itemFurniture->width=$item['width'];
    $itemFurniture->height=$item["height"];
    array_push($products,$itemFurniture);
}




