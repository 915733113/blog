<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 8:23
 */
//require_once 'libs/view/Smarty/Smarty.class.php';
class VIEW
{
    public static $view;

    public static function init_view($viewType,$config){
        self::$view=new $viewType();
        foreach ($config as $key => $value) {
            self::$view->$key=$value;
        }

    }

    public static function assign($key,$value)
    {
      //foreach ($data as $key => $value) {
            self::$view->assign($key,$value);
      // }
    }

    public static function display($template)
    {
        return self::$view->display($template);
    }
}