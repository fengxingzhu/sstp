<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/27 0027
 * Time: 下午 4:14
 */
namespace app\admin\widget;

class Inc
{
    public function header()
    {

        return "sunshine";

    }

    public function footer()
    {
        return "版权：盛世阳光";
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