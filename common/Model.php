<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/4/17
 * Time: 16:34
 */

namespace Common;


use NxLib\RdsOrm\Instance;

class Model extends \NxLib\Core\Model
{
    protected $db;
    public function __construct()
    {
        $this->db = Instance::get();
    }
}