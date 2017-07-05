<?php

namespace app\api\model;

class Image extends BaseModel
{

    protected function getUrlAttr($url,$data){
        return  $this->pathUrl($url,$data);
    }
}
