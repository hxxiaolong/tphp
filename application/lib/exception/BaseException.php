<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 18:38
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $status = 400;
    public $msg = "参数错误";
    public $errorCode = 999;

}