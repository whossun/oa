@extends('layouts.app')
@section('page-bar')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">系统管理</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{ route('role.index') }}">角色管理</a>
        </li>
    </ul>
</div>
@stop
@section('page-title')
<h3 class="page-title"> 角色管理
    <small>添加新角色</small>
</h3>
@stop
@section('page-body')
<div class="row">
    <div class="col-md-12">
        @include('layouts.error')
        <form action="{{ route('role.store') }}" method="POST" role="form">
            @include('role._form')
        </form>
    </div>
</div>
@stop
@section('module_js')
    <script type="text/javascript">

        $(function(){


            $(".permission_list dt input:checkbox").click(function(){
                $(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
            });
            $(".permission_list2 dd input:checkbox").click(function(){
                var l =$(this).parent().parent().find("input:checked").length;
                var l2=$(this).parents(".permission_list").find(".permission_list2 dd").find("input:checked").length;
                if($(this).prop("checked")){
                    $(this).closest("dl").find("dt input:checkbox").prop("checked",true);
                    $(this).parents(".permission_list").find("dt").first().find("input:checkbox").prop("checked",true);
                }
                else{
                    if(l==0){
                        $(this).closest("dl").find("dt input:checkbox").prop("checked",false);
                    }
                    if(l2==0){
                        $(this).parents(".permission_list").find("dt").first().find("input:checkbox").prop("checked",false);
                    }
                }
            });
        });

    </script>


@stop