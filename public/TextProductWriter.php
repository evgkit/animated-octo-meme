<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 01.05.15
 * Time: 16:23
 */

class TextProductWriter extends ShopProductWriter
{
    public function write() {
        $str = "ТОВАРЫ:\n";
        foreach ($this->products as $product) {
            $str .= $product->getSummaryLine() . PHP_EOL;
        }
        print $str;
    }
}