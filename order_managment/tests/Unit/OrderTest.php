<?php

// use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestCase;
// require_once 'user.php';
// require_once 'address.php';
// require_once 'shipping.php';
// require_once 'products.php';
// require_once 'shipping.php';
// require_once 'order.php';
use OrderManagement\Address;
use OrderManagement\Order;
use OrderManagement\Product;
use OrderManagement\Shipping;
use OrderManagement\ProductAttributes\Attributes\Color\Red;
use OrderManagement\ProductAttributes\Attributes\Size\Small;
use OrderManagement\User;

class OrderTest extends TestCase
{
    public function testOrderHaveReceipt(){

        $address = new Address();
        $address->setCity('cairo')
        ->setStreet('el tahrir')
        ->setCountry('egypt');


        $shipping = new Shipping($address);
        $shipping->setShippingName('aramex')
        ->setShippingTax(13)
        ->setShippingCost(10);


        $product = new Product();
        $product->setProductName('t-shirt')
            ->setProductInitPrice(50)
            ->setProductQuantity(30)
            ->setProductCategory('men')
            ->setProductSize(new Small)
            ->setProductColor(new Red);

        // ['size' => 'small', 'color' => 'red']
        $user = new User();
        $user->setUserName('ahmed mohamed')
            ->setUserAddress($address);


        $order = new Order();
        $order->setOrderUser($user)
            ->setOrderProducts([$product])
            ->setOrderTax(.02)
            ->setOrderShipping($shipping)
            ->isDelivering();
        

        $print_receipt = $order->getOrderReceipt()->toSimpleString();

        $this->assertEquals('total price : 83.16 #|# user name : ahmed mohamed #|# product name : t-shirt category : men price : 60 #|# size small #|# color red',$print_receipt);
    }
}
