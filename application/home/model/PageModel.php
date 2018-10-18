<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/19
 * Time: 11:02
 */


class PageModel
{
    private $num;//总条数
    private $size;//每页显示条数
    private $page;//当前页数
    public $pages;//总页数

    public function __construct($num, $size)
    {
        $this->pages = ceil($num / $size);//页数
        $this->num = $num;
        $this->size = $size;
        if (!isset($_GET['page']) || $_GET['page'] <= 1) {
            $this->page = 1;
        } else {
            $this->page = $_GET['page'];
            if ($this->page >= $this->pages) {
                $this->page = $this->pages;
            }
        }

    }

    //获取数字页码，1、2、3
    public function getPage()
    {
        $left = max(1, $this->page - 2);
        $right = min($left + 3, $this->pages);
        $left = max(1, $right - 4);
        $pagenum = array();
        for ($i = $left; $i <= $right; $i++) {
            $_GET['page'] = $i;
            $pagenum[$i] = http_build_query($_GET);
        }
        return $pagenum;
    }

    //获取上一页、下一页
    public function getButton()
    {
        $message = '';
        $pagenum = $this->getPage();
        if ($this->page == 1) {
            $message .= '';

        } else {
            $_GET['page'] = 1;
            $message .= "<a href='" . $_SERVER['PHP_SELF'] . '?' . http_build_query($_GET) . "'>首页</a> ";
            $_GET['page'] = $this->page - 1;
            $message .= "<a href='" . $_SERVER['PHP_SELF'] . '?' . http_build_query($_GET) . "'>上一页</a>  ";
        }
        foreach ($pagenum as $k => $v) {
            if ($k == $this->page) {
                $message .= $k . "\n";
            } else {
                $message .= "<a href='" . $_SERVER['PHP_SELF'] . '?' . $v . "'>" . $k . "</a>\n";
            }
        }
        if ($this->page == $this->pages) {//如果当前页等于最大页数
            $message .= "";//显示没有链接的文字
        } else {
            $_GET['page']=$this->page+1;
            $message .= "  <a href='" . $_SERVER['PHP_SELF'] . '?' . http_build_query($_GET) . "'>下一页</a> ";//显示有链接的文字
            $_GET['page']=$this->pages;
            $message .= "<a href='" . $_SERVER['PHP_SELF'] . '?' . http_build_query($_GET) . "'>尾页</a>";//显示有链接的文字
        }
        return $message;
    }

}



