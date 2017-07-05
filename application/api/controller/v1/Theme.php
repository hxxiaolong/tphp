<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/26
 * Time: 17:06
 */

namespace app\api\controller\v1;


use app\api\Validate\IdMustInt;
use app\api\model\Theme as ThemeModel;

class Theme
{
    public function getThemes()
    {
        $thems =  ThemeModel::getThemes();
        if(!$thems){
            throw new ThemeException();
        }
        
        return $thems;
    }
}