<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 15:46
 */

class testController
{

    public function test()
    {

        $obj=new testModel();
        $res=$obj->get();
       echo $res;
    }
}

