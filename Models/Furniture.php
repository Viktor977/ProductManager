<?php
include_once ("Product.php");
class Furniture extends Product
{
    /**
     * @var string
     */
    public $height;
    /**
     * @var string
     */
    public $width;
    /**
     * @var string
     */
    public $length;
    public function Print()
    {
        parent::Print();
        echo "<span>Demension: </span>".$this->height."<span>&times;</span>".$this->width."<span>&times;</span>".$this->length;
    }
}
