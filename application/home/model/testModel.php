<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 10:00
 */
class testModel{

    public function get(){
        $sql='select * from news';
        $query=DB::query($sql);
        $res=DB::findOne($query);
        echo $res;
        var_dump($res);
    }
}