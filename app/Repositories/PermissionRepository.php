<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository
{
    /** @var Permission 注入的Permission model */
    protected $permission;

    /**
     * PermissionRepository constructor.
     * @param Permission $permission
     */
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function all()
    {
        return $this->permission->all();
    }

    public function create(array $attributes = [])
    {
        return $this->permission->create($attributes);
    }

}