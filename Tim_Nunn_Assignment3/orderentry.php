<?php

require_once  __DIR__ . '/classes/Order.php';
require_once __DIR__ . '/classes/Customer.php';

$order = new Order ("Glasses", 1, 25,  1, 26);
$order->item = "Glasses";
$order->quantity = 1;
$order->price = 25;
$order->tax = 1;
$order->total_cost = 26;
var_dump($order);

if ($order->getItem()) {
echo 'Here is your order';
}

$Mark = new Customer('Mark', 'Walton', 'jwalton@comcast.net', '1313 Mockingbird Lane', 717-717-7171);

echo $Mark->getFirstname();
echo $Mark->getLastname();
echo $Mark->getEmail();
echo $Mark->getAddress();
echo $Mark->getPhonenumber();

echo ("\nPHP execution completed Successfully");