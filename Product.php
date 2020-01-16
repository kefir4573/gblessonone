<?php


class Product
{
    private $nameProduct;
    private $priceProduct;
    private $countProduct;

    public function __construct($nameProduct, $priceProduct, $countProduct)
    {
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->countProduct = $countProduct;
    }

    public function getNameProduct()
    {
        return $this->nameProduct;
    }


    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;
    }


    public function getPriceProduct()
    {
        return $this->priceProduct;
    }


    public function setPriceProduct($priceProduct)
    {
        $this->priceProduct = $priceProduct;
    }


    public function getCountProduct()
    {
        return $this->countProduct;
    }


    public function setCountProduct($countProduct)
    {
        $this->countProduct = $countProduct;
    }


    public function saleProduct()
    {
        $this->countProduct--;
    }
    public function infoMassageProduct()
    {
        echo "$this->nameProduct, цена: $this->priceProduct, осталось: $this->countProduct шт" ;
    }
}