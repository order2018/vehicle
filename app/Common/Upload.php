<?php

namespace App\Common;

class Upload
{
    /**
     * 定义默认LOGO图片
     * @var string
     */
    public $logo = 'logo-sb.jpg';

    /**
     * 定义上传文件目录
     * @var string
     */
    public $uploadPath = 'uploads';

    /**
     * 文件上传
     * @param $field
     * @return string
     */
    public function UploadImg($field)
    {

        if (request()->hasFile($field)) {

            $pic = request()->file($field);

            if ($pic->isValid()) {

                $filename = md5(time()).'.'.$pic->getClientOriginalExtension();

                $pic->move(public_path($this->uploadPath),$filename);

                return $filename;
            }

        }

        return "";

    }

    /**
     * 删除目录图片
     * @param $path
     * @return bool
     */
    public function DelPicture($path) {

        try {

            if (file_exists(public_path($this->uploadPath).'/'.$path)) {

                return unlink(public_path($this->uploadPath).'/'.$path);

            }

            goto del_end;

        } catch (\Exception $e) {

            del_end:

            return false;

        }

    }

}
