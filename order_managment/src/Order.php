<?php

namespace OrderManagement;

use OrderManagement\ReceiptFormatter\ReceiptFormatter;

class Order
{
    private $orderProducts;
    private User $orderUser;
    private Shipping $orderShipping;
    private $orderInvoiceNumber;
    private $orderStatus;
    private $orderTax;
    private $orderPrice = 0;
    private $orderIsDone;

    // public function setOrderStatus($status,$extra = false)
    // {
    //     if ($status == 'pending') {
    //         $this->orderStatus = 'pending';
    //     }
    //     elseif ($status == 'accepted') {
    //         $this->orderStatus = 'accepted';
    //         $this->orderUser->notify("your order accepted");
    //         $t = 0;
    //         foreach ($this->orderProducts as $product){
    //             $t = $product->calculatePrice();
    //         }
    //         if ($extra){
    //             $tax = $this->orderTax * 2;
    //             $tax = $tax + ($this->orderPrice * $tax);
    //             if ($tax == 0){
    //                 $_tax = 1;
    //                 $this->orderPrice *= $_tax;
    //             }
    //         }
    //         $this->orderPrice = $t;
    //     }
    //     elseif ($status == 'processing') {
    //         $this->orderStatus = 'processing';
    //         $this->orderUser->notify("your order is processing");
    //     }
    //     elseif ($status == 'delivering') {
    //         $this->orderStatus = 'delivering';
    //         $this->orderUser->notify("your order is delivering");
    //         $this->orderInvoiceNumber = rand(1,10);
    //         $this->orderShipping->notify('we have order, we need to delivery it');
    //         $t = 0;
    //         foreach ($this->orderProducts as $product){
    //             $t = $product->calculatePrice();
    //         }
    //         $this->orderPrice = $t;
    //         $tax = $this->orderTax + $this->orderShipping->calculateTax();
    //         $this->orderPrice += $tax + $this->orderShipping->getShippingCost() ;
    //     }
    //     elseif ($status == 'received') {
    //         $this->orderStatus = 'pending';
    //         $this->orderIsDone = true;
    //     }
    //     elseif ($status == 'rejected') {
    //         $this->orderStatus = 'pending';
    //         $this->orderUser->notify("your order is rejected");
    //     }
    //     else {
    //         throw new exception("internal error ");
    //     }
    // }

    public function getOrderReceipt(){
        return new ReceiptFormatter($this);
    }

    public function isPending(){
        $this->orderStatus = 'pending';
    }

    public function isAccepted($extra = false)
    {
        $this->orderStatus = 'accepted';
        $this->orderUser->notify("your order accepted");
        $t = 0;
        foreach ($this->orderProducts as $product) {
            $t += $product->calculatePrice();
        }
        if ($extra) {
            $tax = $this->orderTax * 2;
            $tax = $tax + ($this->orderPrice * $tax);
            if ($tax == 0) {
                $_tax = 1;
                $this->orderPrice *= $_tax;
            }
        }
        $this->orderPrice = $t;
    }

    public function isProcessing()
    {
        $this->orderStatus = 'processing';
        $this->orderUser->notify("your order is processing");
    }

    public function isDelivering()
    {
        $this->orderStatus = 'delivering';
        $this->orderUser->notify("your order is delivering");
        $this->orderInvoiceNumber = rand(1, 10);
        $this->orderShipping->notify('we have order, we need to delivery it');
        $t = 0;
        foreach ($this->orderProducts as $product) {
            $t = $product->calculatePrice();
        }
        $this->orderPrice = $t;
        $tax = $this->orderTax + $this->orderShipping->calculateTax();
        $this->orderPrice += $tax + $this->orderShipping->getShippingCost();
    }

    public function isReceived()
    {
        $this->orderStatus = 'pending';
        $this->orderIsDone = true;
    }

    public function isRejected()
    {
        $this->orderStatus = 'pending';
        $this->orderIsDone = true;
    }


    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    public function setOrderProducts(array $orderProducts)
    {
        $this->orderProducts = $orderProducts;

        return $this;
    }


    public function getOrderUser()
    {
        return $this->orderUser;
    }

    public function setOrderUser(User $orderUser)
    {
        $this->orderUser = $orderUser;

        return $this;
    }


    public function getOrderTax()
    {
        return $this->orderTax;
    }


    public function setOrderTax($orderTax)
    {
        $this->orderTax = $orderTax;

        return $this;
    }


    public function getOrderIsDone()
    {
        return $this->orderIsDone;
    }


    public function setOrderIsDone($orderIsDone)
    {
        $this->orderIsDone = $orderIsDone;

        return $this;
    }


    public function getOrderInvoiceNumber()
    {
        return $this->orderInvoiceNumber;
    }

    public function setOrderInvoiceNumber($orderInvoiceNumber)
    {
        $this->orderInvoiceNumber = $orderInvoiceNumber;

        return $this;
    }

    public function getOrderShipping()
    {
        return $this->orderShipping;
    }


    public function setOrderShipping(Shipping $orderShipping)
    {
        $this->orderShipping = $orderShipping;

        return $this;
    }


    public function getOrderPrice()
    {
        return $this->orderPrice;
    }


    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;

        return $this;
    }

    /**
     * Get the value of orderStatus
     */ 
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

}