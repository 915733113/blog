<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 15:09
 */
class adminModel
{
    public $table = 'admin';
    public function getAdminByName($username)
    {
        $sql = 'select * from ' . $this->table . ' where username="' . $username . '"';
        $query = DB::query($sql);
        return DB::findOne($query);
    }
}