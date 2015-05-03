<?php
/**
 * Created by PhpStorm.
 * User: e
 * Date: 01.05.15
 * Time: 19:01
 */

abstract class DomainObject
{
    private $group;

    public function __construct() {
        $this->group = static::getGroup();
    }

    static function getGroup() {
        return "default";
    }

    public static function create() {
        return new static();
    }
}

class User extends DomainObject {}

class Document extends DomainObject {
    static function getGroup() {
        return "document";
    }
}

class SpreadSheet extends Document {}

print_r(Document::create());
print_r(User::create());
print_r(SpreadSheet::create());

