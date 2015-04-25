<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 17:29
 */

//phpinfo();
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$product1 = new ShopProduct( "Собачье сердце", "Булгаков", "Михаил", 6.99 );
$product2 = new ShopProduct( "Горе от ума", "Грибоедов", "Александр", 5.99 );
$cd = new CDProduct( "Scum", "Artist", "Lukas", 5.99, 59.59 );
$book = new BookProduct( "Book", "Duma", "Alexander", 1.99, 350);

//print "Исполнитель: {$product3->getProducer()}\n";

$writer = new ShopProductWriter();
$writer->write($cd);
?> <br/> <?
$writer->write($book);

/*class Wrong {}

try {
    $writer = new ShopProductWriter();
    $writer->write($product1);
    $writer->write();
} catch (Exception $e) {
    print $e;
}*/
