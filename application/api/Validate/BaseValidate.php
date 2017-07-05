<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 20:37
 */

namespace app\api\Validate;


use app\lib\exception\ParamsException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if(!$result){
            throw new ParamsException(
                [
                    //$this->getError() 当前测试类具体的返回错误信息
                    "msg" => $this->getError()
                ]
            );
        }else{
            return true;
        }
    }
}