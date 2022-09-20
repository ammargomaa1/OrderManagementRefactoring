<?php

namespace OrderManagement\ReceiptFormatter;

use OrderManagement\Order;
use OrderManagement\ReceiptFormatter\Formatters\JsonReceiptFormatter;
use OrderManagement\ReceiptFormatter\Formatters\SimpleStringFormatter;
use OrderManagement\ReceiptFormatter\Formatters\XMLReceiptFormatter;

class ReceiptFormatter
{
    public function __construct(public Order $order)
    {
        
    }
    public function toJson()
    {
        return JsonReceiptFormatter::format($this->order);
    }

    public function toXML()
    {
        return XMLReceiptFormatter::format($this->order);
    }

    public function toSimpleString()
    {
        return SimpleStringFormatter::format($this->order);
    }
}
