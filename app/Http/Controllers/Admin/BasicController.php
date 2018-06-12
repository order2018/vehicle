<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    // 基本设置页面
    public function index(){

        return view('admin.basic.index');

    }
}
