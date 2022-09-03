<?php
include_once ("Models/Book.php");
include_once ("Models/DVD.php");
include_once ("Models/Furniture.php");

class Creater
{
    public function createBook(): Book
    {
        return new Book();
    }

    public function createFurniture(): Furniture
    {
        return new Furniture();
    }

    public function createDvd(): DVD
    {
        return new DVD();
    }
}

