<?php
include_once ('Book.php');
include_once ('Dvd.php');
include_once ('Furniture.php');
class ProductCreator
{
    public function createBook(): Book
    {
        return new Book();
    }

    public function createFurniture(): Furniture
    {
        return new Furniture();
    }

    public function createDvd(): Dvd
    {
        return new Dvd();
    }
}
