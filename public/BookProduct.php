<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 23:43
 */

class BookProduct extends ShopProduct
{
    private $numPages = 0;

    public function __construct($title, $producerFirstName, $producerMainName, $price, $numPages) {
        parent::__construct($title, $producerFirstName, $producerMainName, $price);
        $this->numPages = $numPages;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base = parent::getSummaryLine() . ": " . $this->numPages . " стр." . PHP_EOL;
        return $base;
    }
}