<?php

namespace App\Http\Controllers;

class CommonController extends Controller
{
    public function test(){
        dump(session()->all());
    }

    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = '后台管理';
        return view('main', compact('title'));
    }

    /**
     * 获取菜单
     * @return mixed
     */
    public function menu()
    {
        return config('nav');
    }

    public function welcome()
    {
        return view('common.welcome');
    }
}
