<?php
include_once('database/MysqlStorage.php');
include_once ('classes/ProductCreator.php');

$dsn='mysql:host=localhost;dbname=products;charset=utf8';
$username='brad';
$password='1234';

$creator=new ProductCreator();
$dataBase=new MysqlStorage($dsn,$username,$password);
$products=getProducts($dataBase,$creator);


//---------------------------------------------
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
if(isset($_GET['Delete'])) {
    $productsForDelete = findProductsForDelete($_GET['arr'], $products);
    $books = findBookForDelete($productsForDelete);
    $dvd = findDvdForDelete($productsForDelete);
    $furniture = findFurnitureForDelete($productsForDelete);
    foreach ($books as $value)
        $dataBase->deleteBookById($value->Id);
    foreach ($dvd as $value)
        $dataBase->deleteDvdById($value->Id);
    foreach ($furniture as $value)
        $dataBase->deleteFurnitureById($value->Id);

}

//----------------------------------------------------
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


//----------------------------------------

function getProducts(MysqlStorage $dataBase,ProductCreator $creator){
    $products =array();

    $books=getBooks($dataBase,$creator);
    foreach ($books as $book)
        array_push($products,$book);
    $dvd=getDvd($dataBase,$creator);
    foreach ($dvd as $item)
        array_push($products,$item);
    $furniture=getFurniture($dataBase,$creator);
    foreach ($furniture as $item)
        array_push($products,$item);

    return $products;
}
function getBooks(MysqlStorage $dataBase, ProductCreator $creator)
{
    $products=[];
    $books=$dataBase->getBooks();
    foreach ($books as $book) {
        $itemBook = $creator->createBook();
        $itemBook->Id = $book['id'];
        $itemBook->SKU = $book['sku'];
        $itemBook->Title = $book['title'];
        $itemBook->Price = $book['price'];
        $itemBook->Weight = $book['weight'];
        array_push($products, $itemBook);
    }
    return $products;
}
function getDvd(MysqlStorage $database,ProductCreator $creator)
{
    $dvds=$database->getDvds();
    $products=[];
    foreach ($dvds as $dvd) {
        $itemDvd = $creator->createDvd();
        $itemDvd->Id = $dvd['id'];
        $itemDvd->SKU = $dvd['sku'];
        $itemDvd->Title = $dvd['title'];
        $itemDvd->Price = $dvd['price'];
        $itemDvd->size = $dvd['size'];
        array_push($products, $itemDvd);
    }
    return $products;
}
function getFurniture(MysqlStorage $dataBase,ProductCreator $creator)
{
    $products = [];
    $furniture = $dataBase->getFurniture();

    foreach ($furniture as $item) {
        $itemFurniture = $creator->createFurniture();
        $itemFurniture->Id = $item['id'];
        $itemFurniture->SKU = $item['sku'];
        $itemFurniture->Title = $item['title'];
        $itemFurniture->Price = $item['price'];
        $itemFurniture->length = $item['length'];
        $itemFurniture->width = $item['width'];
        $itemFurniture->height = $item["height"];
        array_push($products, $itemFurniture);
    }
    return $products;
}


//--------------------------------------

function findProductsForDelete(string $num,array $products)
{
    $arr = explode(',', $num);
    $prod = [];
    for ($i = 0; $i < count($arr); ++$i) {
        if (array_key_exists($arr[$i], $products)) {
            array_push($prod, $products[$i]);
        }
    }

    return $prod;
}


function findBookForDelete($selected)
{
    $books = [];
    for ($i = 0; $i < count($selected); ++$i) {
        if ($selected[$i] instanceof Book) {
            array_push($books, $selected[$i]);
        }
    }

    return $books;
}


function findDvdForDelete(array $selected){

    $dvds = [];
    for ($i = 0; $i < count($selected); ++$i) {
        if ($selected[$i] instanceof Dvd) {
            array_push($dvds,$selected[$i]);
        }
    }

    return $dvds;
}

function findFurnitureForDelete(array  $selected){

    $furniture = [];
    for ($i = 0; $i < count($selected); ++$i) {
        if ($selected[$i] instanceof Furniture) {
            array_push($furniture,$selected[$i]);
        }
    }

    return $furniture;
}





