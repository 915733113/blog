<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 15:54
 */
class indexModel
{
    public $table = 'news';
    public $comment = 'comment';

    public function newslist()
    {
        $sql = 'select * from ' . $this->table . ' order by datetime asc LIMIT 0,5';
        $query = DB::query($sql);
        $news = DB::findAll($query);
        foreach ($news as $key => $value) {
            $news[$key]['content'] = mb_substr($news[$key]['content'], 0, 200) . "...";
        }
        return $news;
    }

    public function getAbout()
    {
        $file_path = "public/data/img/about.txt";
        if (file_exists($file_path)) {
            $str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
            $str = str_replace("\r\n", "<br />", $str);
            return $str;
        }

    }


    public function getSearch($title)
    {
        $sql = 'select * from ' . $this->table . " where title like '%" . $title . "%'";
        $query = DB::query($sql);
        $data = DB::findAll($query);
        return $data;
    }


    public function insertComment($data)
    {
        extract($data);
        if (empty($comment)) {
            return 4;
        }
        $comment = addslashes($comment);
        //$username = addslashes($username);
        $arr = array(
            'news_id' => $id,
            'comment' => $comment,
            //'username' => $username,
            'datetime' => date('Y-m-d h-i-s',time()),
        );
        $res = DB::insert($this->comment, $arr);
        if ($res!=='') {
            return 5;
        } else {
            return 6;
        }
    }

    public function getPage($num, $size)
    {
        $pages = ceil($num / $size);//页数
        if (!isset($_GET['page']) || $_GET['page'] < 1) {
            $page = 1;
        } else {
            $page = $_GET['page'];
            if ($page >= $pages) {
                $page = $pages;
            }
        }
        switch ($page) {
            case 1:
                $pageStat = array('pageup' => '', 'pagedown' => '下一页', 'page' => '1');
                break;
            case $pages:
                $pageStat = array('pageup' => '上一页', 'pagedown' => '', 'page' => $page);
                break;
            default:
                $pageStat = array('pageup' => '上一页', 'pagedown' => '下一页', 'page' => $_GET['page']);
        }
        return $pageStat;
    }

    public function getComment($page, $size,$id)
    {
        $start = ($page - 1) * $size;
        $sql = 'select * from ' . $this->comment . ' where news_id='.$id.' order by datetime desc limit ' . $start . ',' . $size;
        $query = DB::query($sql);
        $data = DB::findAll($query);
        return $data;
    }

    public function getCategory($id){
        $sql='select * from '.$this->table.' where category_id='.$id;
        $query=DB::query($sql);
        $res=DB::findAll($query);
        foreach ($res as $key => $value) {
            $res[$key]['content'] = mb_substr($res[$key]['content'], 0, 50) . "...";
        }

        return $res;
    }


}
