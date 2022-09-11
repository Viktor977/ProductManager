<?php

abstract class Product
{
    /**
     * @var int
     */
    public  $Id;
    /**
     * @var string
     */
    public $SKU;
    /**
     * @var string
     */
    public $Title;
    /**
     * @var string
     */
    public $Price;

    public function PrintProduct(){
        echo $this->SKU."<br/>";
        echo $this->Title."<br/>";
        echo $this->Price."<span> &#36</span><br/>";
    }
}
