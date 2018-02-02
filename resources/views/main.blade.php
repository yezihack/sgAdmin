<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{$title}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="" media="screen"/>
    <link rel="stylesheet" href="{{asset('statics/plugins/layui/css/layui.css')}}">
    <link rel="stylesheet" href="{{asset('statics/plugins/layer/skin/default/layer.css')}}">
    <link rel="stylesheet" href="{{asset('statics/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('statics/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('common/css/cyStyle.css')}}">
    <link rel="stylesheet" href="{{asset('statics/plugins/ContextJS/css/context.standalone.green.css')}}">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">{{$title}}</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item layui-this"><a href="javascript:createMenu('{{route('menu')}}');">基础导航</a>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">通知<span class="layui-badge">9</span></a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="{{asset('statics/images/index/head.png')}}" class="layui-nav-img">
                    {{session('username')}}
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;" class="cy-page" data-url="{{route('user.pass')}}">修改密码</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="{{route('logout')}}">安全退出</a></li>
        </ul>
    </div>
    <div class="toggle-collapse"></div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <div class="layui-form component">
                <div class="search-menu-back">
                    <input type="text" placeholder="菜单名称 / url" value="" id="menuSearch" class="layui-input menu-search">
                    <span class="menu-search-clear" style="display: none"><i class="layui-icon">&#x1006;</i>  </span>
                </div>
            </div>
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree">
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 1px;">
            <div id="navTab" class="layui-tab layui-tab-brief" lay-allowClose="true" lay-filter="tabs">
                <div class="layui-tab-left"><i class="layui-icon">&#xe65a;</i></div>
                <ul class="layui-tab-title ">
                    <li class="layui-this main-tab" data-url="{{route('welcome')}}">我的主页</li>
                </ul>
                <div class="layui-tab-right"><i class="layui-icon">&#xe65b;</i></div>
            </div>
        </div>
        <div id="main">
            <iframe scrolling="yes" frameborder="0" class="cy-show" src="{{route('welcome')}}"></iframe>
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        sgfoot-layui-cyui-laravel
    </div>
</div>
<script src="{{asset('statics/libs/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('statics/plugins/ContextJS/js/context.js')}}"></script>
<script src="{{asset('statics/plugins/layui/layui.js')}}"></script>
<script src="{{asset('statics/plugins/layer/layer.js')}}"></script>
<script src="{{asset('common/js/whole/utils.js')}}"></script>
<script src="{{asset('common/js/whole/cyLayer.js')}}"></script>
<script src="{{asset('statics/js/navTab.js')}}"></script>
<script src="{{asset('statics/js/index.js')}}"></script>
</body>
</html>
