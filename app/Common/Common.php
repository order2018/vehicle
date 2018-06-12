<?php
namespace App\Common;

class Common
{
    /**
     * @var Upload
     */
    public $upload;

    /**
     * @var PublicFunction
     */
    public $publicFunction;

    /**
     * Common constructor.
     * @param Upload $upload
     * @param PublicFunction $publicFunction
     */
    public function __construct(Upload $upload,PublicFunction $publicFunction)
    {
        $this->upload = $upload;
        $this->publicFunction = $publicFunction;
    }

    /**
     * 跳转提示消息
     * @param null $route
     * @param null $mgs
     * @param string $redirect
     * @return \Illuminate\Http\RedirectResponse
     */
    public function jump($mgs=null,$route=null,$redirect="javascript:;"){

        if (is_null($route)){

            flashy()->error($mgs, $redirect);

            return back();

        }else{

            flashy()->success($mgs, $redirect);

            return redirect()->route($route);

        }

    }

    /**
     * 设置缩略图列表
     * @param $field
     * @return string
     */
    public function Thumbnail($field) {

        if (!empty($field)) {

            if (file_exists(public_path($this->upload->uploadPath.'/'.$field))){
                $img = $field;
            }else{
                goto img_end;
            }

        }else{
            img_end:
            $img = $this->upload->logo;
        }

        return asset($this->upload->uploadPath.'/'.$img);
    }

}