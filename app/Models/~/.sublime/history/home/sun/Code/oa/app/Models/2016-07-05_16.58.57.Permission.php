<?php

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

/**
 * Class Permission
 * @package App\Models
 */
class Permission extends EntrustPermission
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'description', 'pid', 'is_menu',
    ];

}
