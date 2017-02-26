<?php
class AutoPermissionMap
{
    private static $map = [
        'uri/uri1' => [
            'title' => '权限1',
            'type' => 'menu',
            'parent' => ''
        ]
    ];
    public static function getMap()
    {
        return static::$map;
    }
}