<?php

class Book extends Product
{
public $Weight;
public function PrintBook(){
    echo "Hello I am Book";
    echo "<br/>";
    echo "$this->Weight";
    echo "<br/>";

    echo "$this->Price";
    echo "<br/>";

    echo "$this->SKU";
    echo "<br/>";


}
}
