<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 9:01
 */
class Upload{
    public $allowExt=array('jpg','jpeg','png','rar');
    public $maxSize=1;
    protected $error='';

    //获取上传文件信息
    public function getInfo($name){
        $file=$_FILES[$name];
        return $file;
    }

    //创建文件上传路径
    public function createDir(){
        $dir='upload/'.date(Y-m-d);
        if (!is_dir($dir)) {
            mkdir($dir,0777,true);
        } else {
            return $dir;
        }
    }

    //生成随机文件名
    public function randStr(){
         return md5(time());
    }

    //检查文件类型
    public function checkType($ext){
        return in_array($ext,$this->allowExt);
    }

    //检查文件大小
    public function checkSize($size){
        return $size>$this->maxSize*1024*1024;
    }

    //上传文件
    public function up($name){
        if (!isset($_FIEL[$name])) {
            echo "不存在文件";
        }
        $info=$this->getInfo($name);
        $e=ltrim(strrchr($info['name'],'.'),'.');
        if ($this->checkType($e)) {
            echo "文件类型不符合";
        }
        if ($this->checkSize($info['size'])) {
            echo"文件太大";
        }
       $dir= $this->createDir();
        $filename=$this->randStr().'.'.$e;
       if( move_uploaded_file($info['tmp_name'],$dir.'/'.$filename)){
           $data['path']=$dir;
           $data['file']=$filename;
           return $data;
       }
    }

    //获取错误信息
    public function getError($name){
        return $this->error=$_FILES[$name]['error'];
    }
}
