<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 15:21
 */
require_once "config.php";
require_once "framework/Base.php";
//require_once 'framework/libs/DB.class.php';
//require_once 'framework/libs/db/mysql.class.php';
$obj=new Base();
$obj->run($config);



