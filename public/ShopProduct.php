<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 23.04.15
 * Time: 17:32
 */



class ShopProduct
{
    public $title = "Стандартный продукт";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;

    function __construct( $title, $producerMainName, $producerFirstName, $price ) {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    function getProducer() {
        return "{$this->producerFirstName} {$this->producerMainName}";
    }
}
