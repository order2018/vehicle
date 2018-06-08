<?php
namespace App\Common;

class Common
{

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

}