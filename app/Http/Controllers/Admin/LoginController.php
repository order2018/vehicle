<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 登录首页
    public function index() {

        return view('admin.login');

    }

    // 登录行为
    public function store() {

        // 验证
        $this->validate(\request(),[
           'email'=>'required|email',
           'password'=>'required|min:5|max:10',
           'is_remember'=>'integer',
        ]);

        // 逻辑
        $user = \request(['email','password']);
        $is_remember = boolval(\request('$is_remember'));
        if (Auth::attempt($user,$is_remember)){
            return redirect()->route('index');
        }

        // 渲染
        return redirect()->route('index');

    }

    // 登出行为
    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }
}
