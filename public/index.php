<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 17:29
 */

//phpinfo();
error_reporting(E_ALL);

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$product1 = new ShopProduct( "Собачье сердце", "Булгаков", "Михаил", 6.99 );
$product2 = new ShopProduct( "Горе от ума", "Грибоедов", "Александр", 5.99 );

print "Автор: {$product1->getProducer()}\n";

var_dump($product1);
var_dump($product2);