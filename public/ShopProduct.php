<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 17:32
 */

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    function __construct( $title, $producerMainName, $producerFirstName, $price,
                            $numPages = 0, $playLength = 0) {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    function getProducer() {
        return "{$this->producerFirstName} {$this->producerMainName}";
    }

    function getSummaryLine() {
        $base = "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )";
        return $base;
    }
}
