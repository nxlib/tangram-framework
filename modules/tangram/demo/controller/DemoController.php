<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 05/02/2017
 * Time: 13:57
 */

namespace Tangram\Demo\Controller;


use Common\TGRestController;

/**
 * Class DemoController
 * @package Tangram\Demo\Controller
 */
class DemoController extends TGRestController
{
    public function getDemo()
    {
        pr($this->getParam('name'));
    }
    public function postDemo()
    {
        pr($this->postParam('name'));
    }
    public function putDemo()
    {
        pr($this->putParam('name'));
    }
    public function deleteDemo()
    {
        pr($this->deleteParam('name'));
    }
}