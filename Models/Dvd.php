<?php
include_once ("Product.php");
class Dvd extends Product
{
    /**
     * @var string
     */
    public $size;
    public function Print()
    {
        parent::Print();
        echo "<span>Size :</span>".$this->size."<span>MB</span><br/>";
    }
}