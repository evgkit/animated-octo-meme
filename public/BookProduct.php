<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 23:43
 */

class BookProduct extends ShopProduct {
    function getNumberOfPages() {
        return $this->numPages;
    }

    function getSummaryLine() {
        $base = "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )"
            . ": ". $this->getNumberOfPages() . " стр.";
        return $base;
    }
}