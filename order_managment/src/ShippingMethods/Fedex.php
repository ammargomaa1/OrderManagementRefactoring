<?php
namespace OrderManagement\ShippingMethods;

use OrderManagement\ShippingMethods\Contracts\ShippingMethod;

class Fedex extends ShippingMethod
{
    protected static $countryShippingTax = [
        'egypt' => .20,
        'kuwait' => .13
    ];
}
