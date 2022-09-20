<?php

namespace OrderManagement\ReceiptFormatter\Formatters;

use OrderManagement\Order;
use OrderManagement\ReceiptFormatter\Contracts\ReceiptFormatterInterface;

class JsonReceiptFormatter implements ReceiptFormatterInterface
{

    public static function format(Order $order)
    {
        /**
         * TODO: implement Json Formatting
         */
    }
}
