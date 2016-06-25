<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePermissionRequest extends Request
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
            'name' => 'required|unique:permissions,name',
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
            'name.unique' => '权限标识已存在，请重新输入',
            'display_name.required' => '请填写权限名称',
            'pid.required' => '未包含PID，请检查',
        ];
    }

    /**
     * Return the fields and values to create a new post from.
     */
    public function postFillData()
    {
        return [
            'name' => $this->name,
            'display_name' => $this->display_name,
            'description' => $this->description,
            'pid' => $this->pid,
        ];
    }
}
