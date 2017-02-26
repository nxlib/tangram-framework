<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/2/4
 * Time: 16:28
 */

namespace Common;


use NxLib\RdsOrm\Instance;
use NxLib\RdsOrm\Lib\Mysql\ORM;

class TGModel extends ORM
{
    protected $db;
    protected $connection = 'default';
    public function __construct()
    {
        $this->db = Instance::get($this->connection);
    }
}