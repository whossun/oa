<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePermissionRequest;
use App\Http\Requests\UpdatePemissionRequest;
use App\Models\Permission;
use App\Models\Role;
use Toastr;

class PermissionController extends Controller
{
    protected $permission, $role, $count;
    protected $fields = [
        'name' => '',
        'display_name' => '',
        'description' => '',
        'pid' => 0,
    ];

    public function __construct(Permission $permission, Role $role)
    {
        parent::__construct();
        $this->permission = $permission;
        $this->role = $role;
        //$this->count = $this->role->count();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = buildPermission($this->permission->all());
        return view('permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        foreach ($this->fields as $field => $value) {
            $data[$field] = old($field, $value);
        }
        $data['pid'] = (int) $request->get('pid');

        return view('permission.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CreatePermissionRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePermissionRequest $request)
    {
        $data = $request->all();
        if ($this->permission->create($data)) {
            Toastr::success('添加成功');
            return redirect('/permission');
        }
        Toastr::error('添加失败');
        return redirect('/permission');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['id'] = $id;
        $permission = $this->permission->find($id);
        foreach ($this->fields as $field => $value) {
            $data[$field] = old($field, $permission->$field);
        }

        return view('permission.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePemissionRequest $request
     * @param int                                       $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemissionRequest $request, $id)
    {
        if (
            $this->permission->find($id)->update($request->only(['name', 'display_name', 'description', 'pid']))
        ) {
            return redirect()->route('permission.index')->withSuccess('更新成功');
        }

        return redirect()->route('permission.index')->withErrors('更新失败');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child = $this->permission->where('pid', $id)->first();
        if ($child) {
            return redirect()->back()
                ->withErrors('请先将该权限的子权限删除后再做删除操作!');
        }
        $this->permission->destroy($id);
        return redirect()->route('permission.index')->withSuccess('删除成功');
    }
}
