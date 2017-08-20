<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/5/25
 * Time: 11:57
 */

namespace Restful\Controller;

use Common\RestController;

class IndexController extends RestController
{
    /**
     * @RequestMapping("/")
     */
    public function index(){
        $this->send200Response();
    }
}