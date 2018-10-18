<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 15:50
 */
session_start();

class authModel
{
    private $auth = '';
    public $table = 'news';

    public function __construct()
    {
        if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) {
            $this->auth = $_SESSION['auth'];
        }
    }

    public function getauth()
    {
        return $this->auth;
    }

    public function checkUser($username, $password)
    {
        $obj = new adminModel();
        $auth = $obj->getAdminByName($username);
        if (!empty($auth) && $auth['password'] == $password) {
            return $auth;
        } else {
            return false;
        }
    }

    public function loginsubmit()
    {
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);

        if (empty($username) || empty($password)) {
            return false;
        }

        if ($this->auth = $this->checkUser($username, $password)) {
            $_SESSION['auth'] = $this->auth;
            return true;
        } else {
            return false;
        }
    }

    public function count($table)
    {
        $sql = 'select count(*) from ' .$table;
        $query = DB::query($sql);
        $newsnum = DB::findOne($query);
        return $newsnum['count(*)'];
    }

    public function logout()
    {
        unset($_SESSION['auth']);
        $this->auth = '';
    }



}