<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Session;

class Base extends Controller
{

    public function _initialize()
    {
        header("content-type:text/html;charset=utf-8");  //设置编码

        //判断用户是否登录
        // if (!Session::get('user_name')) {
        //     $url = url('login/login');
        //     echo "<script>top.location.href='$url'</script>";
        //     exit;
        // }
    }


    public function upload()
    {
        $file = request()->file('file');  //获取上传文件信息
        if ($file) {
            $info = $file->move(ROOT_PATH, 'aaa');
            ajaxReturn(['status' => 1, 'msg' => '上传成功', 'filename' => $info->getFilename()]);
        } else {
            ajaxReturn(['status' => -1, 'msg' => '上传失败']);
        }
    }
}
