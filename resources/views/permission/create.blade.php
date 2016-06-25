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
                <a href="{{ route('permission.index') }}">权限管理</a>
            </li>
        </ul>
    </div>
@stop
@section('page-title')
    <h3 class="page-title"> 权限管理
        <small>添加新模块</small>
    </h3>
@stop
@section('page-body')
    <div class="row">
        <div class="col-md-12">
            @include('layouts.error')
            <form action="{{ route('permission.store') }}" method="POST" role="form">
                @include('permission._form')
            </form>
        </div>
    </div>
@stop