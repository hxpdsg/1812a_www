<?php

namespace App\Http\Controllers;
use App\Model\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        $data = [
            'u_name'=>'zhangsan',
            'u_email'=>'12@qq.com'
        ];

        $uid = UserModel::insertGetId($data);
        var_dump($uid);
    }
}
