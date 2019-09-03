<?php

namespace App\Http\Controllers;

use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

    public function redisTest()
    {
        $key = 'hxp';
        $val = Redis::get($key);
        var_dump($val);
    }
}
