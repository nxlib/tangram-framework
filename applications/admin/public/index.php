<?php
//error_reporting(E_ALL);ini_set('display_errors', TRUE);ini_set('display_startup_errors', TRUE);
//error_reporting(0);
function pr($data = null){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function spr($data = null){
    echo '<pre style="margin:200px;border:3px dotted #666;color:red;padding:168px;">';
    print_r($data);
    echo '</pre>';
}
$path = dirname(dirname(dirname(__DIR__)));
define("PROJECT_ROOT",dirname(__DIR__));

//composer
include $path.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

//tangram
include PROJECT_ROOT.DIRECTORY_SEPARATOR.'tangram-modules'.DIRECTORY_SEPARATOR.'autoload.php';

try{
    //init mysql config
    $mysql_config = require $path.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'mysql.config.php';
    \NxLib\RdsOrm\Instance::init($mysql_config);

    //open nxlib mvc
    \NxLib\Core\MVC::init($path,AutoLoadClassMap::getMap(),AutoViewsPath::getMap());

    //run router dispatch
    $inspectors = [
//        [(new Puzzle\Auth\Inspector\Inspector()),'check']
    ];
    \NxLib\Core\Dispatch::run(AutoRouterMap::getMap(),$inspectors);
}catch (\NxLib\Core\ParamException $paramException){
    $rs = [
        'status' => 400,
        "msg" => $paramException->getMessage(),
        "data" => (new stdClass())
    ];
    header('Content-type: application/json; charset=utf-8');
    die(json_encode($rs));
}catch (\NxLib\RdsOrm\Lib\Exception\ORMSaveException $ORMSaveException){
    $rs = [
        'status' => 400,
        "msg" => $ORMSaveException->getMessage(),
        "data" => (new stdClass())
    ];
    header('Content-type: application/json; charset=utf-8');
    die(json_encode($rs));
}
//catch (Error $exception){
//    $rs = [
//        'status' => 400,
//        "msg" => "服务器繁忙，请稍后再试",
//        "data" => (new stdClass())
//    ];
//    header('Content-type: application/json; charset=utf-8');
//    die(json_encode($rs));
//}