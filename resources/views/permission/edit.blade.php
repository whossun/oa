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
        <small>权限编辑</small>
    </h3>
@stop
@section('page-body')
    <div class="row">
        <div class="col-md-12">
            @include('layouts.error')
            <form action="{{ route('permission.update', ['id' => $id]) }}" method="POST" role="form">
                {{ method_field('PUT') }}
                @include('permission._form')
            </form>
        </div>
    </div>
@stop