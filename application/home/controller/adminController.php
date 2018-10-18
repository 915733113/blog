<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/13
 * Time: 9:29
 */
class adminController
{
    public $auth = '';

    public function __construct()
    {
        $obj = new authModel();
        $auth = $obj->getauth();
        if (empty($auth) && Base::action() != 'login') {
            $this->showmessage("请在登录后操作", 'admin.php?c=admin&a=login');
        }
    }

    public function login()
    {
        if (isset($_POST['submit'])) {
            $this->checklogin();
        }
        VIEW::display('admin/login.html');
    }

    public function checklogin()
    {
        $authobj = new authModel();
        if ($authobj->loginsubmit()) {
            $this->showmessage("恭喜你登录成功", 'admin.php?c=admin&a=index');
        } else {
            $this->showmessage("登录失败，请重新输入", 'admin.php?c=admin&a=login');
        }

    }

    public function index()
    {
        $authobj = new authModel();
        $newsnum = $authobj->count('admin');
        $auth = $authobj->getauth();
        VIEW::assign('username', $auth['username']);
        VIEW::assign('newsnum', $newsnum);
        VIEW::display('admin/index.html');
    }

    public function logout()
    {
        $authobj = new authModel();
        $authobj->logout();
        $this->showmessage("退出登录成功", 'admin.php?c=admin&a=login');
    }

    public function newsadd()
    {
        $newsobj = new newsModel();
        if (empty($_POST)) {
            if (isset($_GET['id'])) {
                $data = $newsobj->getNewsById($_GET['id']);
            } else {
                $data = array();
            }
            $category = $newsobj->getCategory();
            //var_dump($category);
            VIEW::assign('category', $category);
            VIEW::assign('data', $data);
            VIEW::display('admin/newsadd.html');
        } else {
            $this->checkSubmit();
        }
    }

    public function checkSubmit()
    {
        $newsobj = new newsModel();
        $res = $newsobj->newsSubmit($_POST);
        if ($res == 1) {
            $this->showmessage("标题和内容不能为空", 'admin.php?c=admin&a=newsadd');
        }
        if ($res == 2) {
            $this->showmessage("更新成功", 'admin.php?c=admin&a=newslist');
        }
        if ($res = 3) {
            $this->showmessage("发布成功", 'admin.php?c=admin&a=newslist');
        }
    }


    public function newsdel()
    {
        $newsobj = new newsModel();
        $newsobj->del($_GET['id']);
        $this->showmessage("删除成功", 'admin.php?c=admin&a=newslist');
    }

    private function showmessage($info, $url)
    {
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }

    public function newslist()
    {
        $authobj = new authModel();
        $newsobj = new newsModel();
        $pages=isset($_GET['page'])?$_GET['page']:1;
        $num = $authobj->count('news');//数据总条数
        $size = 5;//每页显示条数
        $data = $newsobj->getData($pages, $size);
        $pageobj = new PageModel($num, $size);
        $page = $pageobj->getButton();
        VIEW::assign('page', $page);
        VIEW::assign('data', $data);
        VIEW::display('admin/newslist.html');
    }
}
