<?php

namespace app\api\model;
use think\Model;

class BannerItem extends BaseModel
{
    public function bannerImg(){
        return $this->belongsTo("Image","img_id","id");
    }
}
