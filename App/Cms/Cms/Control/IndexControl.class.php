<?php

/**
 * 后台登录界面
 * Class IndexControl
 * @author hdxj <houdunwangxj@gmail.com>
 */
class IndexControl extends Control
{
    //显示后台主界面
    public function index()
    {

        $this->display();
    }

    //欢迎页面
    public function welcome()
    {
        $this->display();
    }
}
 
?>