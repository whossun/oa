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
        <small>角色列表</small>
    </h3>
@stop
@section('page-body')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-users"></i>角色列表 </div>
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
                                    <a href='{{ route('role.create') }}' class="btn sbold blue"> Add New
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
                                <th> 角色标识 </th>
                                <th> 角色名称 </th>
                                <th> 角色说明 </th>
                                <th> 操作 </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td> {{ $role->id }} </td>
                                    <td> {{ $role->name }} </td>
                                    <td> {{ $role->display_name }} </td>
                                    <td> {{ $role->description }} </td>
                                    <td>
                                        <a href='{{ route('role.show', ['id' => $role->id]) }}' class="btn btn-xs btn-outline blue">
                                            <i class="fa fa-search"></i>查看
                                        </a>
                                        <a href='{{ route('role.edit', ['id' => $role->id]) }}' class="btn btn-xs btn-outline yellow">
                                            <i class="fa fa-edit"></i>编辑
                                        </a>
                                        <a href='javascript:;' class="btn btn-xs btn-outline red remove" data-role-id="{{ $role->id }}" data-toggle="confirmation" data-singleton="true">
                                            <i class="fa fa-remove"></i>删除
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="paginate pull-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop