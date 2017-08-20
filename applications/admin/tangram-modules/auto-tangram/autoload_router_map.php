<?php
class AutoRouterMap
{
    private static $map = [
        'GET#/' => ['namespace' => 'Restful\Controller', 'class' => 'Restful\Controller\IndexController', 'function' => 'index']
    ];
    public static function getMap()
    {
        return static::$map;
    }
}