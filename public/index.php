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

$product1 = new ShopProduct();
$product2 = new ShopProduct();

var_dump($product1);
var_dump($product2);