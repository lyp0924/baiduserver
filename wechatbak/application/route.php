<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
use \think\Route;

Route::rule(['/'=>'index/Index/test']);
Route::rule(['/index'=>'index/Index/test']);
Route::rule(['/index/Index'=>'index/Index/test']);
Route::rule(['/index/Index/index'=>'index/Index/test']);
Route::get([
    '/index/Index/index/:id'   => ['index/Index/index' ,[],['id'=>'\d+'] ],
    '/index/Index/index/:name'   => ['index/Index/index' ,[],['id'=>'\s+'] ],
    '/index/Index/index/name/:id'   => ['index/Index/index' ,[],[] ],
    '/index/Index/index/name/:name'   => ['index/Index/index' ,[],[] ],

]);
//Route::get(['/index/Index/index/id/:id'=>['index/Index/index']]);