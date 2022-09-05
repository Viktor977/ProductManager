<?php
include "config/database.php";
include_once ('Models/Book.php');
include_once ('Models/Furniture.php');
include_once ('Models/Dvd.php');

function fillBook():Book{
    $book =new Book();
    $book->SKU = $_POST['sku'];
    $book->Title = $_POST["title"];
    $book->Price = $_POST["price"];
    $book->Weight = $_POST["weight"];


    return $book;

};

function fillFurniture():Furniture{
  $furniture=new Furniture();
  $furniture->SKU=$_POST["sku"];
  $furniture->Title=$_POST["title"];
  $furniture->Price=$_POST["price"];
  $furniture->height=$_POST["height"];
  $furniture->width=$_POST["width"];
  $furniture->length=$_POST["length"];

  return $furniture;

}

function fillDvd():Dvd{
    $dvd=new Dvd();
    $dvd->SKU=$_POST["sku"];
    $dvd->Title=$_POST["title"];
    $dvd->Price=$_POST["price"];
    $dvd->size=$_POST["size"];

    return $dvd;
}




    if (isset($_POST['weight'])) {
        $book = fillBook();

        $sql = "INSERT INTO books (sku,title,price,weight) VALUES('$book->SKU','$book->Title','$book->Price','$book->Weight')";
        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
    if (isset($_POST["size"])) {
        $dvd = fillDvd();
        $sql = "INSERT INTO dvd(sku,title,price,size) VALUES('$dvd->SKU','$dvd->Title','$dvd->Price','$dvd->size')";
        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
    if (isset($_POST['width'])) {
        $furniture = fillFurniture();
        $sql = "INSERT INTO furniture(sku,title,price,height,width,lenght)
          VALUES ('$furniture->SKU', '$furniture->Title','$furniture->Price','$furniture->height','$furniture->width','$furniture->length')";

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }

    }

