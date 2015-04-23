<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 22:53
 */


class ShopProductWriter
{
    /**
     * @param $shopProduct
     */
    public function write( ShopProduct $shopProduct = null ) {
        if (!is_null($shopProduct)) {
            $str = "{$shopProduct->title}: " . $shopProduct->getProducer() . " ({$shopProduct->price})\n";
            print $str;
        } else {
            var_dump($shopProduct);
        }
    }
}