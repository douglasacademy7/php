<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";


$db = new Conn("localhost","test_oo","root","");
$product = new Product;

$product->setName("javaScript")
        ->setDesc("stackfull.");

$service = new ServiceProduct($db,$product);


print_r($service->save());
echo '<br>';
echo '<hr>';
print_r($service->listar());
