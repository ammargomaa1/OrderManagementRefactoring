<?php
namespace OrderManagement;

use OrderManagement\ShippingMethods\Aramex;
use OrderManagement\ShippingMethods\Fedex;
use OrderManagement\Address;
use OrderManagement\ShippingMethods\Contracts\ShippingMethod;

// require_once 'ShippingMethods/Aramex.php';
// require_once 'ShippingMethods/Fedex.php';
class Shipping
{
    private $shippingName;
    private $shippingCost;
    private $shippingTax;

    public function __construct(protected Address $address)
    {
        
    }

    public function calculateTax(){
        // if ($this->shippingName == 'aramex'){
        //     if ($this->address->country == 'egypt'){
        //         return $this->shippingTax + .14;
        //     }
        //     elseif ($this->address->country == 'kuwait'){
        //         return $this->shippingTax + .1;
        //     }
        // }
        // elseif($this->shippingName == 'fedex'){
        //     if ($this->address->country == 'egypt'){
        //         return $this->shippingTax + .20;
        //     }
        //     elseif ($this->address->country == 'kuwait'){
        //         return $this->shippingTax + .13;
        //     }
        // }

        $shipping = $this->getShippingMethod($this->shippingName);

        if (!$shipping instanceof ShippingMethod) {
            throw new Exception('Invalid shipping method');
        }

        return $this->shippingTax + $shipping->getShippingCost($this->address->getCountry());
    }

    protected function getShippingMethod($shippingMethod)
    {
        $shippingMethods = [
            'aramex' => new Aramex(),
            'fedex' => new Fedex(),
        ];

        return $shippingMethods[$shippingMethod] ?? null;
    }

    public function notify($message){
        /**
         * TODO
         * we need to add channel to send notification to shipping company but not now
         */
    }


    public function getShippingName()
    {
        return $this->shippingName;
    }


    public function setShippingName($shippingName)
    {
        $this->shippingName = $shippingName;

        return $this;
    }


    public function getShippingCost()
    {
        return $this->shippingCost;
    }


    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }


    public function getShippingTax()
    {
        return $this->shippingTax;
    }


    public function setShippingTax($shippingTax)
    {
        $this->shippingTax = $shippingTax;

        return $this;
    }
}