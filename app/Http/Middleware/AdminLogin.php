<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // 读取判断当前用户是否在角色关系表当中
        $role = DB::table('admin_role_users')->where('user_id',$request->user()->id)->get()->map(function ($value) { return (array)$value; })->toArray();

        if ($role){
            return $next($request);
        }

        return redirect()->route('login');

    }
}
