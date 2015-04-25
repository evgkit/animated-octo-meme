<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 17:32
 */

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct( $title, $producerMainName, $producerFirstName, $price) {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    function getProducer() {
        return "{$this->producerFirstName} {$this->producerMainName}";
    }

    function getSummaryLine() {
        $base = "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )";
        return $base;
    }
}
