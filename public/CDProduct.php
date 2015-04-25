<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 23:39
 */

class CDProduct extends ShopProduct
{
    public $playLength;

    function __construct($title, $producerMainName, $producerFirstName, $price, $playLength) {
        parent::__construct($title, $producerMainName, $producerFirstName, $price);
        $this->playLength = $playLength;
    }

    function getPlayLength() {
        return $this->playLength;
    }

    function getSummaryLine() {
        $base = parent::getSummaryLine() . ": Время звучания - " . $this->getPlayLength();
        return $base;
    }
}