<?php
class AutoLoadClassMap{
    private static $map = [
        'Tangram\\User\\' => ['modules/tangram/user'],
        'Tangram\\Permission\\' => ['modules/tangram/permission'],
        'Tangram\\Demo\\' => ['modules/tangram/demo'],
    ];
    public static function getMap()
    {
        return static::$map;
    }
}
