<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 23:43
 */

class BookProduct extends ShopProduct
{
    public $numPages;

    function __construct($title, $producerMainName, $producerFirstName, $price, $numPages) {
        parent::__construct($title, $producerMainName, $producerFirstName, $price);
        $this->numPages = $numPages;
    }

    function getNumberOfPages() {
        return $this->numPages;
    }

    function getSummaryLine() {
        $base = parent::getSummaryLine() . ": " . $this->getNumberOfPages() . " стр.";
        return $base;
    }
}