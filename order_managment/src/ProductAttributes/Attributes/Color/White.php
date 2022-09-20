<?php

namespace OrderManagement\ProductAttributes\Attributes\Color;

use OrderManagement\ProductAttributes\Contracts\ColorAttribute\ColorAttribute;

class White implements ColorAttribute
{
    public function getPrice()
    {
        return -15;
    }

    public function getAttributeValue()
    {
        return 'white';
    }
}
