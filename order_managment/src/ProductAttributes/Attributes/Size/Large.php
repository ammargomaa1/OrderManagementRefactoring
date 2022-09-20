<?php

namespace OrderManagement\ProductAttributes\Attributes\Size;

use OrderManagement\ProductAttributes\Contracts\SizeAttribute\SizeAttribute;

class Large implements SizeAttribute
{
    public function getPrice(){
        return 50;
    }

    public function getAttributeValue()
    {
        return 'large';
    }
}
