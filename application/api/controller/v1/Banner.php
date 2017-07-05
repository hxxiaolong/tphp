<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 14:31
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\Validate\IdMustInt;
use app\lib\exception\BannerIdException;
use app\lib\exception\ParamsException;


class Banner
{
    /**
     * 获取banner信息
     * $id:bannerid
     */
    public function getBanner($id)
    {
        if ((new IdMustInt())->goCheck()) {
            //验证层通过
            $banner = BannerModel::banner($id);
            if(!$banner){
                throw new ParamsException([
                    "errorCode"=>"999",
                    "msg"=>"参数不正确"
                ]);
            }
            return $banner;
        };
    }
}