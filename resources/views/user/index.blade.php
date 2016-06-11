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
            <a href="{{ route('user.index') }}">成员管理</a>
        </li>
    </ul>
</div>
@stop
@section('page-title')
<h3 class="page-title"> 成员管理
    <small>成员列表</small>
</h3>
@stop
@section('page-body')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i>成员列表 </div>
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
                                <a href='{{ route('user.create') }}' class="btn sbold blue"> Add New
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
                                <th> 用户名 </th>
                                <th> 真实姓名 </th>
                                <th> 性别 </th>
                                <th> 联系电话 </th>
                                <th> 帐号状态 </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td> {{ $user->id }} </td>
                                <td> {{ $user->username }} </td>
                                <td> {{ $user->realname }} </td>
                                <td> {{ $user->sex }} </td>
                                <td> {{ $user->phone }} </td>
                                @if ($user->status)
                                <td> <span class="label label-success"> 正常 </span> </td>
                                @else
                                <td> <span class="label label-danger"> 禁用 </span> </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="paginate pull-right">
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop