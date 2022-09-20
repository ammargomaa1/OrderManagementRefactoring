<?php

namespace OrderManagement;

use OrderManagement\ProductAttributes\Contracts\ColorAttribute\ColorAttribute;
use OrderManagement\ProductAttributes\Contracts\SizeAttribute\SizeAttribute;

class Product
{
    private $productName;
    private $productQuantity;
    private $productCategory;
    private $productInitPrice;

    private $productPrice;
    private $productAttributes;

    private $productSizePrice = 0;

    private $productColorPrice = 0;


    
    public function calculatePrice(){
        // foreach ($this->productAttributes as $key => $attribute){
        //     if ($key == 'size'){
        //         if ($attribute == 'small') {
        //             $this->productPrice -= 10;
        //         }
        //         elseif ($attribute == 'medium') {
        //             $this->productPrice += 20;
        //         }
        //         elseif ($attribute == 'large') {
        //             $this->productPrice += 50;
        //         }
        //         else {
        //             throw new exception("error in size");
        //         }
        //     }
        //     elseif ($key == 'color'){
        //         if ($attribute == 'white') {
        //             $this->productPrice -= 15;
        //         }
        //         elseif ($attribute == 'red') {
        //             $this->productPrice += 20;
        //         }
        //         elseif ($attribute == 'blue') {
        //             $this->productPrice += 18;
        //         }
        //         else {
        //             throw new exception("error in color");
        //         }
        //     }
        //     else {
        //         throw new exception("error in attribute");
        //     }
        // }

        $this->productPrice = $this->productInitPrice + $this->productSizePrice + $this->productColorPrice;
        return $this->productPrice;
    }


    public function getProductName()
    {
        return $this->productName;
    }


    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }


    public function getProductQuantity()
    {
        return $this->productQuantity;
    }


    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }


    public function getProductCategory()
    {
        return $this->productCategory;
    }


    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }







    public function getProductSizePrice()
    {
        return $this->productSizePrice;
    }


    public function setProductSize(SizeAttribute $productSize)
    {
        $this->productSizePrice = $productSize->getPrice();
        $this->productAttributes[] = $productSize;
        return $this;
    }


    public function getProductColorPrice()
    {
        return $this->productColorPrice;
    }

    public function setProductColor(ColorAttribute $productColor)
    {
        $this->productColorPrice = $productColor->getPrice();
        $this->productAttributes[] = $productColor;
        return $this;
    }




    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }


    public function getProductInitPrice()
    {
        return $this->productInitPrice;
    }


    public function setProductInitPrice($productInitPrice)
    {
        $this->productInitPrice = $productInitPrice;

        return $this;
    }
}