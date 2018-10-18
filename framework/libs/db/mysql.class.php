<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/12
 * Time: 15:28
 */
class mysql
{


    private static $instance;

    private function __construct()
    {

    }

    public function __clone()
    {

    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public $conn = '';

    public function error($error)
    {
        die("输入的信息有误" . $error);
    }

    public function connect($config)
    {
        extract($config);
        $this->conn = mysqli_connect($config['dbhost'], $config['dbuser'],
            $config['dbpwd'], $config['dbname']);
        if (!$this->conn) {
            $this->error(mysqli_error($this->conn));
        } else {
            mysqli_query($this->conn, 'set names' . $config['dbcharset']);
        }
    }

    function query($sql)
    {
        if (!$query = mysqli_query($this->conn, $sql)) {
            $this->error(mysqli_error($this->conn));
        } else {
            return $query;
        }
    }

    function findOne($query)
    {
        $res = mysqli_fetch_array($query, MYSQLI_ASSOC);
        return $res;
    }


    public function findAll($query)
    {
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $res;
    }

    public function insert($table, $arr)
    {
        foreach ($arr as $key => $value) {
            $keyArr[] = "`" . $key . "`";
            $keyVal[] = "'" . $value . "'";
        }
        $keyArr = implode(',', $keyArr);
        $keyVal = implode(',', $keyVal);
        $sql = 'insert into ' . $table . '(' . $keyArr . ') values (' . $keyVal . ')';
        return $this->query($sql);


    }

    public function update($table, $arr, $where)
    {
        foreach ($arr as $key => $value) {
            $keyArr[] = "`" . $key . "`='" . $value . "'";
            $keyArrs = implode(',', $keyArr);
        }
        $sql = 'update ' . $table . ' set ' . $keyArrs . ' where ' . $where;
        $this->query($sql);
    }

    public function delete($table, $where)
    {
        $sql = 'delete from ' . $table . ' where ' . $where;
        $this->query($sql);
    }

    public function test()
    {
        echo "success";
    }
}