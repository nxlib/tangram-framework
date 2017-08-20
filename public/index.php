<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2016/12/19
 * Time: 16:40
 */
function pr($data = null){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
$path = dirname(dirname(__FILE__));
//composer
include $path.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

//tangram
include $path.DIRECTORY_SEPARATOR.'tangram-modules'.DIRECTORY_SEPARATOR.'autoload.php';

//init mysql config
//$mysql_config = require $path.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'mysql.config.php';
//\NxLib\RdsOrm\Instance::init($mysql_config);

//open nxlib mvc
\NxLib\Core\MVC::init(dirname(__FILE__),AutoLoadClassMap::getMap());

//run router dispatch
\NxLib\Core\Dispatch::run(AutoRouterMap::getMap(),[(new Tangram\Permission\Inspector\Inspector()),'check']);