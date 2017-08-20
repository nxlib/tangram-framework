<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/2/4
 * Time: 15:31
 */

namespace Tangram\Permission\Model;


use Common\TGModel;

class RoleModel extends TGModel
{
    protected static $table = "roles";
    public $id;
    public $name;
    public $created;
    public $modified;
}