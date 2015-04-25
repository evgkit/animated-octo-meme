<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 22:53
 */


class ShopProductWriter
{
    private $products = [];

    public function addProduct( ShopProduct $shopProduct ) {
        $this->products[] = $shopProduct;
    }

    public function write() {
        $str = "";
        foreach ($this->products as $product) {
            $str .= $product->getSummaryLine();
        }
        print $str;
    }
}