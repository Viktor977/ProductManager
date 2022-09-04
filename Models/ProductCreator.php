<?php
include_once ("Models/Book.php");
include_once("Models/Dvd.php");
include_once ("Models/Furniture.php");

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

