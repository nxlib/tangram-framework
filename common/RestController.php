<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/4/17
 * Time: 16:34
 */

namespace Common;

use NxLib\Request\Params;
use NxLib\Response\Response;

class RestController extends \NxLib\Core\Controller
{

    private $rs = [
        'status' => null,
        'msg' => 'ok',
        'data' => []
    ];
    private $http_status_code = 200;

    public function __construct()
    {
    }
    public function __destruct()
    {
        if($this->http_status_code != 200 || is_null($this->rs['status'])){
            return;
        }
        //默认使用json输出
        http_response_code($this->http_status_code);
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($this->rs);
    }


    protected function send400Response($msg,$data = null){
        if(is_null($data)){
            $data = new \stdClass();
        }
        $this->rs['status'] = 400;
        $this->rs['data'] = $data;
        $this->rs['msg'] = $msg;
        exit;
    }
    protected function send200Response($data = null,$msg = 'ok'){
        if(is_null($data)){
            $data = new \stdClass();
        }
        $this->rs['status'] = 200;
        $this->rs['data'] = $data;
        $this->rs['msg'] = $msg;
        exit;
    }
    protected function send401Response($data = null,$msg = '登陆失效，请先登录'){
        if(is_null($data)){
            $data = new \stdClass();
        }
        $this->rs['status'] = 400;
        $this->rs['data'] = $data;
        $this->rs['msg'] = $msg;

        $this->http_status_code = 401;
        Response::sendJsonResponse($this->rs,401);
    }
    protected function postParam($key, $default = '', $msg = '')
    {
        return Params::postParam($key,$default,$msg);
    }
    protected function getParam($key, $default = '', $msg = '')
    {
        return Params::getParam($key,$default,$msg);
    }
    protected function putParam($key, $default = '', $msg = '')
    {
        return Params::putParam($key,$default,$msg);
    }
    protected function deleteParam($key, $default = '', $msg = '')
    {
        return Params::deleteParam($key,$default,$msg);
    }
    protected function param($key, $default = '', $msg = '')
    {
        return Params::param($key,$default,$msg);
    }
    protected function header($key){
        return Params::header($key);
    }
}