<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 15:11
 */

namespace app\api\Validate;

class IdMustInt extends BaseValidate
{
    protected $rule =[
        "id"=>"require|isInt"
    ];

    protected function isInt($value, $rule="", $data="" ,$field="")
    {
        if (is_numeric($value) && is_int($value+0) && ($value + 0) > 0) {
            return true;
        } else {
            return $field."必须是正整数";
        }
    }
}