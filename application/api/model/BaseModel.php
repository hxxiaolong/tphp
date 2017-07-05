<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26
 * Time: 10:59
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected $hidden = ["delete_time", "update_time"];

    //全路径的url
    protected function pathUrl($url, $data)
    {
        if ($data["from"] == 1) {
            //需要拼合路径
            return config("settings.webUrl").$url;
        }
        if ($data["from"] == 2) {
            return $url;
        }
    }
}