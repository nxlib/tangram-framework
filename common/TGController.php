<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 2017/2/4
 * Time: 16:26
 */

namespace Common;


use NxLib\Core\Controller;

class TGController extends Controller
{
    public function sendSuccessResponse($data,$msg = '请求成功',$code = '')
    {
        $rs = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ];
        $this->sendJsonResponse($rs);
    }
    public function sendFailResponse($msg = '请求失败',$data = [],$code = '')
    {
        $rs = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ];
        $this->sendJsonResponse($rs,400);
    }
}