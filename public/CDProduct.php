<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 23:39
 */

class CDProduct extends ShopProduct
{
    function getPlayLength() {
        return $this->playLength;
    }

    function getSummaryLine() {
        $base = "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )"
            . ": Время звучания - " . $this->getPlayLength();
        return $base;
    }
}