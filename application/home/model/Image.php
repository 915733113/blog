<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 10:47
 */
class Image
{
    private $error = '';

    public function getError()
    {
        $this->error();
    }

    public function thumb($src, $width, $height, $prex = 'sm_')
    {
        $ext = strtolower(strrchr($src, '.'));
        switch ($ext) {
            case '.jpg':
                $type = 'jpg';
                break;
            case  'jpeg':
                $type = 'jpeg';
                break;
            case 'png':
                $type = 'png';
                break;
            case 'rar':
                $type = 'rar';
                break;
            default:
                $this->error = "文件格式不正确";
                return false;
        }
        $open = 'imagecreatefrom' . $type;
        $info = $open($src);
        $src_w = imagesx($info);
        $src_y = imagesy($info);
        $dst = imagecreatetruecolor($width, $height);
        imagecopyresampled($dst, $info, 0, 0, 0, 0, $width, $height, $src_w, $src_y);
        $filename = basename($src);
        $ducname = dirname($src);
        $thumb_path = $ducname . '/' . $prex . $filename;
        $out='image'.$type;
        $out($dst,$thumb_path);
//        imagepng($dst,$thumb_path);
        imagedestroy($dst);
        imagedestroy($src);
        return $prex.$filename;
    }

    public function water($dst_path, $water_path)
    {
        $prename='water_';
        $filename=basename($dst_path);
        $docname=dirname($dst_path);
         $waterplace = $docname . '/' . $prename . $filename;
        $dst = imagecreatefromstring(file_get_contents($dst_path));
        $src = imagecreatefromstring(file_get_contents($water_path));
        list($src_w,$src_h)=getimagesize($water_path);
        imagecopymerge($dst,$src,10,10,0,0,$src_w,$src_h,30);
        list($dst_w,$dst_h,$dst_type)=getimagesize($dst_path);
        switch ($dst_type){
            case  1://GIF
                imagegif($dst,$waterplace);
                break;
            case 2://JPG
                imagejpeg($dst,$waterplace);
                break;
            case 3://PNG
                imagepng($dst,$waterplace);
                break;
            default:
                break;
        }
        imagedestroy($dst);
        imagedestroy($src);    }
}