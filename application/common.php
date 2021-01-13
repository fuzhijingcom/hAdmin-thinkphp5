<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 接口返回数据
 */
function ajaxReturn($data)
{
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Headers:*');
    header("Access-Control-Allow-Methods:GET, POST, OPTIONS, DELETE");
    header('Content-Type:application/json; charset=utf-8');

    $return = json_encode($data, JSON_UNESCAPED_UNICODE);

    exit(str_replace("\\/", "/", $return));
}