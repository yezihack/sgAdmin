@extends('layout')
@section('title', $title)
@section('style')
    <style>
    </style>
@stop
@section('body')
    <blockquote class="layui-elem-quote">{{$title}}
        <a class="layui-btn" href="{{route('user.add')}}">注册</a>
    </blockquote>
    <table id="table-list" lay-filter="tableLay"></table>
    <script type="text/html" id="switchTpl">
        <input type="checkbox" name="" value="@{{d.id}}" lay-skin="switch" lay-text="开启|禁用" lay-filter="status"
               @{{d.status== 1 ? 'checked' : '' }}>
    </script>
    <script type="text/html" id="barTable">
        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs layui-hide" lay-event="del">删除</a>
    </script>
@stop
@section('script')
    <script>
        layui.use(['table', 'form'], function () {
            var table = layui.table;
            var form = layui.form;
            //第一个实例
            table.render({
                elem: '#table-list'
                , height: 'auto'
                , method: 'post'
                , url: "{{route('user.list')}}" //数据接口
                , page: true //开启分页
                , size: 'lg'
                , cellMinWidth: 80
                , cols: [[ //表头
                    {field: 'id', title: 'ID', sort: true}
                    , {field: 'username', title: '用户名'}
                    , {field: 'update_format', title: '修改时间', sort: true}
                    , {title: '操作', templet: '#barTable', unresize: true, width: 178}
                ]]
            });
            table.on('tool(tableLay)', function (obj) {
                var data = obj.data;
                if (obj.event === 'detail') {
                    layer.alert(data.remark, {title: '备注信息'});
                } else if (obj.event === 'del') {
                    layer.confirm('真的删除行么', function (index) {
                        $.post("{{route('user.del')}}", {id: data.id}, function (rev) {
                            if (rev.status === 0) {
                                obj.del();
                            }
                            layer.msg(rev.msg);
                        });
                        layer.close(index);
                    });
                } else if (obj.event === 'edit') {
                    window.location.href = "{{route('user.edit')}}?id=" + data.id;
                }
            });
        });
    </script>
@stop