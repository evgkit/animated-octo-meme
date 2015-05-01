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

/*$writer = new ShopProductWriter();
$writer->addProduct($product1);
$writer->addProduct($product2);
$writer->addProduct($cd);
$writer->addProduct($book);
$writer->write();*/

mysql_connect("localhost", "root", "1");
mysql_select_db("test");

$sql = "INSERT INTO products (id, type, firstname, mainname, title, price, numpages, playlength, discount)
     VALUES('1', '2', '3', '4', '5', '6', NULL, '8', '9')";
mysql_query($sql);

$dsn = "mysql:host=localhost;dbname=test";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
$pdo = new PDO($dsn, 'root', '1', $options);
$product3 = ShopProduct::getInstance(1, $pdo);

$anotherWriter = new ShopProductWriter();
$anotherWriter->addProduct($product3);
$anotherWriter->write();

//StaticExample::sayHello();
//StaticExample::sayHello();
//StaticExample::sayHello();
//ShopProductWriter::write();
