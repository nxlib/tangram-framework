<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/5/26
 * Time: 15:42
 */

namespace Lib\StringEx;


class Password
{
    public static function hash($string):string {
        return password_hash($string,PASSWORD_BCRYPT,['cost' => 12]);
    }
    public static function validate($string,$hash):bool {
        return password_verify($string,$hash);
    }
}