<?php

namespace OrderManagement\ProductAttributes\Attributes\Color;

use OrderManagement\ProductAttributes\Contracts\ColorAttribute\ColorAttribute;

class Red implements ColorAttribute
{
    public function getPrice()
    {
        return 20;
    }

    public function getAttributeValue()
    {
        return 'red';
    }
}
