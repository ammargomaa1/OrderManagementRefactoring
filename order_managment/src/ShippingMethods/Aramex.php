<?php
namespace OrderManagement\ShippingMethods;
use OrderManagement\ShippingMethods\Contracts\ShippingMethod;

class Aramex extends ShippingMethod
{
    protected static $countryShippingTax = [
        'egypt' => .14,
        'kuwait' => .1
    ];


}
