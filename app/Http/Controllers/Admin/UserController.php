<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 用户首页
    public function index() {

        return view('admin.user.index');

    }

    // 创建用户
    public function create() {

        return view('admin.user.create');

    }
}
