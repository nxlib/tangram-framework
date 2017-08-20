<?php
class AutoLoadClassMap{
    private static $map = [
        'User\\' => ['modules/user'],
        'Restful\\Controller\\' => ['applications/admin/restful/controller']
    ];
    public static function getMap()
    {
        return static::$map;
    }
}