<?php
namespace OrderManagement\ShippingMethods\Contracts;


abstract class ShippingMethod
{
    protected static $countryShippingTax;
    public function getShippingCost(string $countryName)
    {
        if (array_key_exists($countryName, static::$countryShippingTax)) {
            return static::$countryShippingTax[$countryName];
        } else {
            throw new Exception('Country is not supported');
        }
    }
}
