<?php
/**
 * Created by PhpStorm.
 * User: fengxingzhu
 * Date: 2018/1/25 0025
 * Time: 下午 5:29
 */
namespace app\admin\controller;
use think\Controller;

class Main extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}