<?php
/**
 * 菜单配置
 * User: Administrator
 * Date: 2018/2/1
 * Time: 16:02
 */
return [
    'menuList' => [
        [
            "children" => null,
            "icon"     => "fa fa-tachometer",
            "name"     => "系统设置",
            "type"     => 0,
            "url"      => null,
            "list"     => [
                [
                    "children" => null,
                    "icon"     => "fa fa-font",
                    "list"     => null,
                    "name"     => "用户管理",
                    "type"     => 1,
                    "url"      => '/user/list'
                ],
            ],
        ],
        [
            "children" => null,
            "icon"     => "fa fa-tachometer",
            "name"     => "第三方支持",
            "type"     => 0,
            "url"      => null,
            "list"     => [
                [
                    "children" => null,
                    "icon"     => "fa fa-font",
                    "list"     => null,
                    "name"     => "laravel",
                    "type"     => 1,
                    "url"      => "http://d.laravel-china.org/"
                ],
                [
                    "children" => null,
                    "icon"     => "fa fa-font",
                    "list"     => null,
                    "name"     => "layui",
                    "type"     => 1,
                    "url"      => "http://www.layui.com/"
                ],
                [
                    "children" => null,
                    "icon"     => "fa fa-font",
                    "list"     => null,
                    "name"     => "cy-ui",
                    "type"     => 1,
                    "url"      => "http://www.cymall.xin:8084/"
                ],
            ],
        ]
    ]
];