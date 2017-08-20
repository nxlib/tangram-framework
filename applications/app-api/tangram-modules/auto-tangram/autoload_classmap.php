<?php
class AutoLoadClassMap{
    private static $map = [
        'User\\' => ['modules/user']
    ];
    public static function getMap()
    {
        return static::$map;
    }
}