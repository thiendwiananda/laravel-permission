<?php

namespace Anandalee\Permission;

use Illuminate\Database\Eloquent\Model;

class Gate
{
    public function can(Model $model, String $guard) : bool
    {
        $permission = $model->permissions()->where('permissions.guard_name', $guard)->first();

        return $permission ? true : false;
    }
}
