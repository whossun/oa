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
    <small>添加新成员</small>
</h3>
@stop
@section('page-body')
<div class="row">
    <div class="col-md-12">
        {{--@if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item list-group-item-danger"> {{ $error }} </li>
            @endforeach
        </ul>
        @endif--}}
        @include('layouts.error')
        <form action="{{ route('user.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-body margin-bottom-40">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('username') ? 'has-error' : 'has-info' }}">
                            <div class="input-group right-addon">
                                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" />
                                <label for="username">用户名(用以登陆系统)</label>
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('realname') ? 'has-error' : 'has-info' }}">
                            <div class="input-group right-addon">
                                <input type="text" class="form-control" id="realname" name="realname" value="{{ old('realname') }}" />
                                <label for="realname">真实姓名(用以识别身份)</label>
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('phone') ? 'has-error' : 'has-info' }}">
                            <div class="input-group right-addon">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" />
                                <label for="phone">联系电话(方便他人联系)</label>
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('password') ? 'has-error' : 'has-info' }}">
                            <div class="input-group right-addon">
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="password">登陆密码</label>
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('password_confirmation') ? 'has-error' : 'has-info' }}">
                            <div class="input-group right-addon">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                <label for="password_confirmation">确认密码</label>
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                            <select class="form-control" id="role" name="role">
                                <option value="1" selected="">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                            </select>
                            <label for="role">用户角色</label>
                        </div>




                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-md-radios">
                            <label>性别</label>
                            <div class="md-radio-inline">
                                <div class="md-radio {{ $errors->has('sex') ? 'has-error' : 'has-info' }}">
                                    <input type="radio" checked="" class="md-radiobtn" name="sex" id="sex1" value="男">
                                    <label for="sex1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> 男
                                    </label>
                                </div>
                                <div class="md-radio {{ $errors->has('sex') ? 'has-error' : 'has-info' }}">
                                    <input type="radio" class="md-radiobtn" name="sex" id="sex2" value="女">
                                    <label for="sex2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> 女
                                    </label>
                                </div>
                                <div class="md-radio {{ $errors->has('sex') ? 'has-error' : 'has-info' }}">
                                    <input type="radio" class="md-radiobtn" name="sex" id="sex3" value="保密">
                                    <label for="sex3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> 保密
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group form-md-radios">
                            <label>帐号状态</label>
                            <div class="md-radio-inline">
                                <div class="md-radio {{ $errors->has('status') ? 'has-error' : 'has-info' }}">
                                    <input type="radio" checked="" class="md-radiobtn" name="status" id="status1" value="1">
                                    <label for="status1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> 启用
                                    </label>
                                </div>
                                <div class="md-radio has-error">
                                    <input type="radio" class="md-radiobtn" name="status" id="status2" value="0">
                                    <label for="status2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> 禁用
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="form-actions noborder">
                        <button class="btn blue margin-right-10" type="submit">Submit</button>
                        <button class="btn default" type="button">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop