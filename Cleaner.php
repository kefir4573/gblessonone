<?php


class Cleaner extends Product
{
    private $power;

    public function __construct($nameProduct, $priceProduct, $countProduct, $power)
    {
        parent::__construct($nameProduct, $priceProduct, $countProduct);
        $this->power = $power;

    }

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }


    public function infoMassageProduct()
    {
        echo 'пылесос ';
        echo parent::infoMassageProduct() . ', мощность: ' . $this->power;
    }
}