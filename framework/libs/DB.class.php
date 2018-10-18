<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 15:29
 */

class DB
{
    public static $db;

    public static function init_db($dbType, $config)
    {
        DB::$db = $dbType::getInstance();
        DB::$db->connect($config);
    }

    public static function query($sql)
    {
        return DB::$db->query($sql);
    }

    public static function findOne($query)
    {
        return DB::$db->findOne($query);
    }

    public static function findAll($query)
    {
        return DB::$db->findAll($query);
    }

    public static function insert($table, $arr)
    {
        DB::$db->insert($table, $arr);
    }

    public static function update($table, $arr, $where)
    {
        DB::$db->update($table, $arr, $where);
    }

    public static function delete($table, $where)
    {
        DB::$db->delete($table, $where);
    }


}