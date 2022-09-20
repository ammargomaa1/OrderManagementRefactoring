# Refactoring OrderManagement

We will go through each file and mention what exactly has been refactored  

## Product

In the Product.php class, The Attribute (color and size) were considered behaviors and extracted in two Interfaces ColorAttribute.php and SizeAttribute.php under the ProductAttribute.php interface.

This was an implementation of the strategy design pattern.

## Shipping

The Shipping methods were extracted under another abstract class ShippingMethod.php which means that adding new shipping will require creating the shipping method class that contains an array of the countries and their costs and registering this shipping method in getShippingMethod() function within the Shipping.php class

## Address & User

Just used setters and getters for class properties and, like the other, changed the naming to match the conventions.

## Order

Extracted The setOrderStatus function into multiple functions each one does what it has to do when changing to this status.

Also The getOrderReceipt() where refactored, There's getOrderReceipt() function that returns a ReceiptFormatter objects which formats into multiple other formats like XML and json
