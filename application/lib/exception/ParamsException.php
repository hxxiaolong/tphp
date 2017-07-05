<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/21
 * Time: 14:04
 */

namespace app\lib\exception;

//解决参数相关的所有
class ParamsException extends BaseException
{
    //直接写就会覆盖父类继承来的
    public $status = 400;
    public $msg = "参数错误";
    public $errorCode = 999;

    public function __construct($arr=[])
    {
        if(!is_array($arr)){
            return;
        }

        if(array_key_exists("status",$arr)){
            //如果参数存在,则覆盖变为自定义的否则则保持默认
            $this->status = $arr["status"];
        }
        if(array_key_exists("msg",$arr)){
            $this->msg = $arr["msg"];
        }
        if(array_key_exists("errorCode",$arr)){
            $this->errorCode = $arr["errorCode"];
        }
    }

}