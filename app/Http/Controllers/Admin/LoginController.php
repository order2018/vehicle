<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // 登录首页
    public function index() {

        return view('admin.login');

    }

    // 登录行为
    public function store(Request $request) {



    }
}
