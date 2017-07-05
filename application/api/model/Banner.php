<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 19:02
 */

namespace app\api\model;


use app\lib\exception\BannerIdException;
use think\Exception;

class Banner extends BaseModel
{
    //这里必须是public的，不能是protected的
    public function bannerItems(){
        return $this->hasMany("BannerItem","banner_id","id");
    }

    //静态方法的书写格式
    public static function banner($index){
        return self::with(["bannerItems","bannerItems.bannerImg"])->find($index);
    }
}