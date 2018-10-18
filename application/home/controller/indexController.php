<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 15:39
 */
class indexController
{
    public function index()
    {
        $indexobj = new indexModel();
        $data = $indexobj->newslist();
        //var_dump($data);
        VIEW::assign('data', $data);
        VIEW::display('index/list.html');
    }

    public function about()
    {
        $indexobj = new indexModel();
        $about = $indexobj->getAbout();
        VIEW::assign('about', $about);
        VIEW::display('index/about.html');
    }

    public function newsshow()
    {

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $size = 5;//每页条数
        $authobj = new authModel();
        $newsobj = new newsModel();
        $indexobj = new indexModel();
        $num = $authobj->count('news');//数据总条数
        $data = $newsobj->getNew($_GET['id']);
        $comment = $indexobj->getComment($page, $size, $_GET['id']);
        $pageobj = new PageModel($num, $size);
        $page = $pageobj->getButton();
        VIEW::assign('data', $data);
        VIEW::assign('page', $page);
        VIEW::assign('comment', $comment);
        VIEW::display('index/show.html');
    }


    public function search()
    {
        if (!($_POST['key'])) {
            $this->showmessage("请输入文章题目关键词", 'index.php?c=index&a=index');
        }
        $indexobj = new indexModel();
        $data = $indexobj->getSearch($_POST['key']);
        if (!$data) {
            $this->showmessage("搜索结果不存在", 'index.php?c=index&a=index');
        }
        VIEW::assign('data', $data);
        VIEW::display('index/search.html');
    }


    public function comment()
    {
        $indexobj = new indexModel();
        $id = $_POST['id'];
        $res = $indexobj->insertComment($_POST);
        if ($res == 4) {
            $this->showmessage("评论不能为空", "index.php?c=index&a=newsshow&id=$id");
        }
        if ($res == 5) {
            $this->showmessage("发表评论成功", "index.php?c=index&a=newsshow&id=$id");
        }
        if ($res == 6) {
            $this->showmessage("输入信息有误", "index.php?c=index&a=newsshow&id=$id");
        }
    }

    public function studyShow()
    {
        $indexobj = new indexModel();
        $data = $indexobj->getCategory('1');
        VIEW::assign('data', $data);
        VIEW::display('index/studyShow.html');
    }

    public function lifeShow()
    {
        $indexobj = new indexModel();
        $data = $indexobj->getCategory('2');
        VIEW::assign('data', $data);
        VIEW::display('index/lifeShow.html');
    }

    private function showmessage($info, $url)
    {
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }

    public function test()
    {
        VIEW::display('index/test.html');
    }
}