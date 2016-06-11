<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|alpha_num|between:2,20|unique:users,username',
            'realname' => 'required|between:2,20',
            'sex'      => 'required|in:男,女,保密',
            'status'   => 'required',
            'phone'    => 'required|mobile_phone',
            'password' => 'required|between:6,20|confirmed',
            'password_confirmation' => 'required|between:6,20'
        ];
    }

    public function messages()
    {
        return [
            'username.required'              => '请填写用户名！',
            'username.between'               => '用户名不得少于:min位或大于:max位！',
            'username.alpha_num'             => '用户名只能阿拉伯数与英文字母组合！',
            'username.unique'                => '用户名已存在，请重新填写！',

            'realname.required'              => '请填写真实姓名！',
            'realname.between'               => '真实姓名不得少于:min位或大于:max位！',

            'sex.required'                   => '请选择性别！',
            'status.required'                => '请选择帐号状态！',

            'phone.required'                 => '请填写联系电话！',
            'phone.mobile_phone'             => '请填写正确的手机号码！',

            'password.required'              => '请填写登陆密码！',
            'password.between'               => '登陆密码不得少于:min位或大于:max位！',
            'password.confirmed'             => '确认密码与所填密码不一致！',
            'password_confirmation.required' => '请填写确认密码！',
            'password_confirmation.between'  => '确认密码不得少于:min位或大于:max位！',
        ];
    }
}
