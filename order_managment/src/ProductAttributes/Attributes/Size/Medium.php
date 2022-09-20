<?php

namespace OrderManagement\ProductAttributes\Attributes\Size;

use OrderManagement\ProductAttributes\Contracts\SizeAttribute\SizeAttribute;

class Medium implements SizeAttribute
{
    public function getPrice()
    {
        return 20;
    }

    public function getAttributeValue()
    {
        return 'medium';
    }
}
