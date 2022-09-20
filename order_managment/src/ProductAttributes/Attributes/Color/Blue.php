<?php

namespace OrderManagement\ProductAttributes\Attributes\Color;

use OrderManagement\ProductAttributes\Contracts\ColorAttribute\ColorAttribute;

class Blue implements ColorAttribute
{
    public function getPrice()
    {
        return 18;
    }

    public function getAttributeValue()
    {
        return 'blue';
    }
}
