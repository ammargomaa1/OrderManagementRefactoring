<?php

namespace OrderManagement\ProductAttributes\Contracts;

interface ProductAttribute
{
    public function getPrice();
    public function getAttributeValue();
}
