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
                <a href="{{ route('role.index') }}">权限管理</a>
            </li>
        </ul>
    </div>
@stop
@section('page-title')
    <h3 class="page-title"> 权限管理
        <small>权限列表</small>
    </h3>
@stop
@section('page-body')
    @include('layouts.success')
    @include('layouts.error')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-users"></i>权限列表 </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href='{{ route('permission.create', ['pid' => 0]) }}' class="btn sbold blue"> Add New
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> 权限标识 </th>
                                <th> 权限名称 </th>
                                <th> 权限说明 </th>
                                <th> 操作 </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td> {{ $permission->id }} </td>
                                    <td> {{ $permission->display_name }} </td>
                                    <td> {{ $permission->name }} </td>
                                    <td> {{ $permission->description }} </td>
                                    <td>
                                        <a href='{{ route('permission.create', ['pid' => $permission->id]) }}' class="btn btn-xs btn-outline blue">
                                            <i class="fa fa-plus"></i>添加应用
                                        </a>
                                        <a href='{{ route('permission.edit', ['id' => $permission->id]) }}' class="btn btn-xs btn-outline yellow">
                                            <i class="fa fa-edit"></i>编辑
                                        </a>
                                        <a href='javascript:;' class="btn btn-xs btn-outline red remove" data-permission-id="{{ $permission->id }}" data-toggle="confirmation" data-singleton="true">
                                            <i class="fa fa-remove"></i>删除
                                        </a>
                                    </td>
                                </tr>
                                @foreach($permission['child'] as $child)
                                    <tr>
                                        <td> {{ $child->id }} </td>
                                        <td> ┗━{{ $child->display_name }} </td>
                                        <td> {{ $child->name }} </td>
                                        <td> {{ $child->description }} </td>
                                        <td>
                                            <a href='{{ route('permission.create', ['pid' => $child->id]) }}' class="btn btn-xs btn-outline blue">
                                                <i class="fa fa-plus"></i>添加方法
                                            </a>
                                            <a href='{{ route('permission.edit', ['id' => $child->id]) }}' class="btn btn-xs btn-outline yellow">
                                                <i class="fa fa-edit"></i>编辑
                                            </a>
                                            <a href='javascript:;' class="btn btn-xs btn-outline red remove" data-permission-id="{{ $child->id }}" data-toggle="confirmation" data-singleton="true">
                                                <i class="fa fa-remove"></i>删除
                                            </a>
                                        </td>
                                    </tr>
                                    @foreach($child['child'] as $v)
                                        <tr>
                                            <td> {{ $v->id }} </td>
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;┗━{{ $v->display_name }} </td>
                                            <td> {{ $v->name }} </td>
                                            <td> {{ $v->description }} </td>
                                            <td>
                                                <a href='{{ route('permission.edit', ['id' => $v->id]) }}' class="btn btn-xs btn-outline yellow">
                                                    <i class="fa fa-edit"></i>编辑
                                                </a>
                                                <a href='javascript:;' class="btn btn-xs btn-outline red remove" data-permission-id="{{ $v->id }}" data-toggle="confirmation" data-singleton="true">
                                                    <i class="fa fa-remove"></i>删除
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- 分页 --}}
                    {{--<div class="row">
                        <div class="col-md-12">
                            <div class="paginate pull-right">

                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <form id="del_form" method="POST" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
    </form>
@stop
@section('module_js')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('.remove').on('confirmed.bs.confirmation', function () {
                var id = $(this).attr('data-permission-id');
                $('#del_form').attr('action', '/permission/' + id).submit();
                //window.href().reload();
            });

            $('.remove').on('canceled.bs.confirmation', function () {
                alert('You canceled action #1');
            });
        });

    </script>




@stop
