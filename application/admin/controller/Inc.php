<?php
/**
 * Created by PhpStorm.
 * User: fengxingzhu
 * Date: 2018/1/26 0026
 * Time: 上午 9:39
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Inc extends Controller
{
    public function header()
    {
        $this->assign([
            'company' => 'sunshine1',
        ]);
        return $this->fetch();
    }

    public function footer()
    {

        return $this->fetch();
    }

    public function left()
    {
        return $this->fetch();
    }

    public function title()
    {
        return $this->fetch();
    }
}