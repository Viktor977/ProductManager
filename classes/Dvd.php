<?php
include_once ("Product.php");
class Dvd extends Product
{
    /**
     * @var string
     */
    public $size;
    public function PrintProduct()
    {
        parent::PrintProduct();
        echo "<span>Size :</span>".$this->size."<span>MB</span><br/>";
    }
}
