<?php

namespace OrderManagement\ReceiptFormatter\Formatters;

use OrderManagement\Order;
use OrderManagement\ReceiptFormatter\Contracts\ReceiptFormatterInterface;

class SimpleStringFormatter implements ReceiptFormatterInterface
{

    public static function format(Order $order)
    {
        $receipt = '';
        if ($order->getOrderStatus() == 'delivering') {
            $receipt .= "total price : " . $order->getOrderPrice()
                . ' #|# user name : ' . $order->getOrderUser()->getUserName();
            foreach ($order->getOrderProducts() as $product) {
                $receipt .= ' #|# product name : ' . $product->getProductName()
                    . ' category : ' . $product->getProductCategory()
                    . ' price : ' . $product->getProductPrice();
                foreach ($product->getProductAttributes() as $attribute) {
                    $receipt .= ' #|# ' . $attribute::ATTRIBUTE_NAME . ' ' . $attribute->getAttributeValue();
                }
            }
            return $receipt;
        } else {
            throw new Exception("internal error ");
        }
    }
}
