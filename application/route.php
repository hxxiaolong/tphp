<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;

Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');
Route::get('api/:version/theme/:id','api/:version.Theme/getThemes');
Route::get('api/:version/themeProduct/:id','api/:version.ThemeProduct/getThemeProcduct');
