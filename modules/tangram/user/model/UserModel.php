<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 03/02/2017
 * Time: 19:02
 */

namespace Tangram\User\Model;


use NxLib\Core\Model;

class UserModel extends Model
{
    public function getAll(){
        $data = [
            "tangram-user",
            "abc"
        ];
        return $data;
    }
}