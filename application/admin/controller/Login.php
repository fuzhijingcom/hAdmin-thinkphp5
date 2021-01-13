<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    public function _initialize()
    {
        //判断用户是否登录
        if (Session::get('store_info')) {
            $url = url('index/index');
            echo "<script>top.location.href='$url'</script>";
            exit;
        }
    }

    public function login()
    {
        if ($this->request->isPost()) {
            $account_number = Input('username');
            $password = Input('password');

            if ($account_number == "admin"){
                if (md5($password) !== md5('admin')) {
                    ajaxReturn(['status' => 2, 'msg' => '密码错误']);
                } else {
                    Session::set('user_name', $account_number);
                    ajaxReturn(['status' => 1, 'msg' => '登录成功!']);
                }
            }else{
                ajaxReturn(['status' => 2, 'msg' => '账号错误']);
            }

        } else {
            return $this->fetch();
        }
    }


}