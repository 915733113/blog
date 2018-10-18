<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 8:31
 */
class newsModel
{
    public $table = 'news';

    public function newsSubmit($data)
    {
        extract($data);
        if (empty($title) || empty($content)) {
            return 1;
        }
        $title = addslashes($title);
        $content = addslashes($content);
        $content = str_replace("\r\n", "<br />", $content);
        $author = addslashes($author);
        $from = addslashes($from);
        $category_id = addslashes($category_id);
        $arr = array(
            'title' => $title,
            'content' => $content,
            'author' => $author,
            'from' => $from,
            'category_id' => $category_id,
            'datetime' => date('Y-m-d h-i-s'),time());
        if ($_POST['id'] != '') {
            DB::update($this->table, $arr, 'id=' . $id);
            return 2;
        } else {
            DB::insert($this->table, $arr);
            return 3;
        }
    }

    public function getNewsById($id)
    {
        if (empty($id)) {
            return array();
        } else {
            intval($id);
            $sql = 'select * from ' . $this->table . ' where id=' . $id;
            $query = DB::query($sql);
            $data = DB::findOne($query);
            $data['content'] = str_replace("<br />", "\r\n", $data['content']);
            return $data;
        }
    }

    public function getNew($id)
    {
        if (empty($id)) {
            return array();
        } else {
            intval($id);
            $sql = 'select * from ' . $this->table . ' where id=' . $id;
            $query = DB::query($sql);
            $data = DB::findOne($query);
            // $data['content'] = str_replace("<br />", "\r\n", $data['content']);
            return $data;
        }
    }

    public function getCategory()
    {
        $sql = 'select * from category';
        $query = DB::query($sql);
        $res = DB::findAll($query);
        return $res;
    }


    public function del($id)
    {
        DB::delete($this->table, 'id=' . $id);
    }


    public function getPage($num, $size,$page)
    {
        $pages = ceil($num / $size);//页数
        $left = max(1, $page - 2);
        $right = min($left + 3, $pages);
        $left = max(1, $right - 4);
        $page=array();
        for ($i = $left; $i <= $right; $i++) {
            $_GET['page'] =$i;
            $page[$i]=http_build_query($_GET);
    }
        return $page;
    }

    public function getData($page, $size)
    {
        $start = ($page - 1) * $size;
        $sql = 'select * from ' . $this->table . ' order by datetime desc limit '
            . $start . ',' . $size;
        $query = DB::query($sql);
        $data = DB::findAll($query);
        return $data;
    }
}