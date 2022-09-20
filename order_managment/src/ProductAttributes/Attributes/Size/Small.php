<?php

namespace OrderManagement\ProductAttributes\Attributes\Size;

use OrderManagement\ProductAttributes\Contracts\SizeAttribute\SizeAttribute;

class Small implements SizeAttribute
{
    public function getPrice()
    {
        return -10;
    }

    public function getAttributeValue()
    {
        return 'small';
    }
}
