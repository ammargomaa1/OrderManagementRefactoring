<?php

namespace OrderManagement\ReceiptFormatter\Contracts;

use OrderManagement\Order;

interface ReceiptFormatterInterface
{
    public static function format(Order $order);
}
