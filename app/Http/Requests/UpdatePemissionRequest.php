<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePemissionRequest extends Request
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
            'name' => 'required',
            'display_name' => 'required',
            'pid' => 'required',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '请填写权限标识',
            'display_name.required' => '请填写权限名称',
            'pid.required' => '未包含PID，请检查',
        ];
    }
}
