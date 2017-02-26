<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 03/02/2017
 * Time: 19:03
 */

namespace Tangram\User\Controller;


use Tangram\User\Model\UserModel;

/**
 * Class RegisterController
 * @package Tangram\User\Controller
 */
class RegisterController
{
    /**
     * @requestMapping("/")
     */
    public function index(){
        $user = (new UserModel())->getAll();
        pr($user);
    }
}