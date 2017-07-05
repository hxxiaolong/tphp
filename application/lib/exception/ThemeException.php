<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/5
 * Time: 14:32
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $status = 400;
    public $msg = "分类查询错误";
    public $errorCode = 4000;
}