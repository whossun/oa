<?php
namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Toastr;

class RoleController extends Controller
{

    protected $role, $permission;
    protected $fields = [
        'name' => '',
        'display_name' => '',
        'description' => '',
        'perms' => [],
    ];

    public function __construct(Role $role, Permission $permission)
    {
        parent::__construct();
        $this->role = $role;
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role->all();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['permissionAll']=[];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }
        $arr = Permission::all()->toArray();

        foreach ($arr as $v) {
            $data['permissionAll'][$v['cid']][] = $v;
        }
        return view('role.create', $data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($role = $this->role->create($data)) {
            $role->attachPermissions($data['permission']);
            Toastr::success('添加成功');
            return redirect('/role');
        }
        Toastr::error('添加失败');
        return redirect('/role');
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
        $role = $this->role->find($id);
        if (! $role) {Toastr::error('该角色不存在');return redirect('/role');}
        $permissions = [];
        if ($role->perms) {
            foreach ($role->perms as $v) {
                $permissions[] = $v->id;
            }
        }
        //dd($role->perms);
        $role->perms = $permissions;

        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $role->$field);
        }
        /*$arr = $this->permission->all()->toArray();

        foreach ($arr as $v) {
            $data['permissionAll'][$v['pid']][] = $v;
        }*/
        $data['permissions'] = buildPermission($this->permission->all());
        $data['id'] = $id;
        //dd($data);
        return view('role.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        //
    }
}
