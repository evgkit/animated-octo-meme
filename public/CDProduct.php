<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 23:39
 */

class CDProduct extends ShopProduct
{
    private $playLength = 0;

    public function __construct($title, $producerFirstName, $producerMainName, $price, $playLength) {
        parent::__construct($title, $producerFirstName, $producerMainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getSummaryLine() {
        $base = parent::getSummaryLine() . ": Время звучания - " . $this->playLength . PHP_EOL;
        return $base;
    }
}