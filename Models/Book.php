<?php
include_once ('Product.php');
class Book extends Product
{
    /**
     * @var string
     */
    public $Weight;
public function Print()
{
    parent::Print();
    echo '<span>Weight :</span>'.$this->Weight."<span> KG</span>";
}
}
