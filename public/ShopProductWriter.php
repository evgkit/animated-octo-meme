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
            $str = $shopProduct->getSummaryLine();
            print $str;
        }
    }
}