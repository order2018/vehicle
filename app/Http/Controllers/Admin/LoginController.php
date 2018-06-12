<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 登录首页
    public function index() {

        if (!empty(Auth::user()->id)){

            return redirect()->route('index');

        }

        return view('admin.login');

    }

    // 登录行为
    public function store(LoginRequest $request) {

        if (Auth::attempt($request->getUser(),$request->getRemember())){

            return app('common')->jump('登录成功！','index');

        }

        return app('common')->jump('登录失败！');

    }

    // 登出行为
    public function logout(){

        Auth::logout();
        return app('common')->jump('登出成功！','login');

    }
}
