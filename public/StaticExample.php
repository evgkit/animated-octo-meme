<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 28.04.15
 * Time: 21:54
 */

class StaticExample
{
    static public $aNum = 0;

    static public function sayHello() {
        self::$aNum++;
        print "Привет ( ". self::$aNum ." )";
    }
}

