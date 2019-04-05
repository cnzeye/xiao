<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller
{

    public function index($name = '李大爷', $age = 34)
    {
        echo 'hello' . $name . '你今年' . $age . '岁啦！';
    }
    public function yes()
    {
        $data = Db::name('user')->find();

        $this->assign('data', $data);
        return $this->fetch();
    }
}
