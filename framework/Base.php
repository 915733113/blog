<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 15:24
 */
//require_once 'libs/view/Smarty/Smarty.class.php';
//require_once 'VIEW.php';
class Base
{

    public function run($config)
    {
        $this->autoRegister();
        //DB、VIEW必须先运行
        DB::init_db('mysql', $config['dbconfig']);
        VIEW::init_view('Smarty', $config['viewconfig']);
        $this->getUrlParams();
        $this->dispatch();
    }

    //获取url参数信息
    public function getUrlParams()
    {
        $controller = isset($_GET['c']) ? $_GET['c'] : 'index';
        $action = isset($_GET['a']) ? $_GET['a'] : 'index';
        $controller .= "Controller";
        define('CONTROLLER', $controller);
        define('ACTION', $action);

    }

    public static function autoLoad($className)
    {
        $baseConfig = [
            'VIEW' => 'VIEW.php',
            'DB' => 'libs/DB.class.php',
            'mysql' => 'libs/db/mysql.class.php',
            'Smarty'=>'libs/view/Smarty/Smarty.class.php'
        ];
        if (isset($baseConfig[$className])) {
            require_once $baseConfig[$className];
        } elseif (substr($className, -5) == 'Model') {
            require_once './application/home/model/' . $className . ".php";
        } elseif (substr($className, -10) == 'Controller') {
            require_once './application/home/controller/' . $className . ".php";
        }
    }

    private function autoRegister()
    {
        spl_autoload_register('Base::autoLoad');
    }

    public function dispatch()
    {
        $controller = CONTROLLER;
        $action = ACTION;
        $obj = new $controller();
        $obj->$action();
    }

    public static function action()
    {
        $action = isset($_GET['a']) ? $_GET['a'] : 'index';
        return $action;
    }
}