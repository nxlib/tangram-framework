<?php
/**
 * User: Tangram Auto Creator
 * Date: 2017-08-20 18:01:09
 */

namespace User\Service;


use User\Model\UserModel;

class UserService
{
  public static function getMyUser($id){
    return (new UserModel())->getUserById($id);
  }
}