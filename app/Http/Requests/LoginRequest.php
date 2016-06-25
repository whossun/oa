<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request
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
            'username' => 'required|between:2,20|alpha_num',
            'password' => 'required|between:5,20',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '请填写用户名',
            'username.between' => '用户名不得少于:min位或大于:max位！',
            'username.alpha_num' => '用户名只能阿拉伯数与英文字母组合',

            'password.required' => '请填写密码',
            'password.between' => '密码不得少于:min位或大于:max位！',
        ];
    }
}
