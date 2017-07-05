<?php

namespace app\api\model;

use think\Model;

class Theme extends BaseModel
{

    protected $hidden = ["topic_img_id", "head_img_id","delete_time", "update_time"];

    //封装模型关系
    public function topImgs(){
        return $this->belongsTo("Image","topic_img_id","id");
    }

    public function headImgs(){
        return $this->belongsTo("Image","head_img_id","id");
    }

    //获取分类
    public static function getThemes(){
        return self::with(["topImgs","headImgs"])->select();
    }
}
