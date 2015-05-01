<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 22:53
 */

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct( ShopProduct $shopProduct ) {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}