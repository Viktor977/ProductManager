<?php
include_once ('Product.php');
class Book extends Product
{
    /**
     * @var string
     */
    public $Weight;
    public function PrintProduct()
    {
        parent::PrintProduct();
        echo '<span>Weight :</span>'.$this->Weight."<span> KG</span>";
    }
}
