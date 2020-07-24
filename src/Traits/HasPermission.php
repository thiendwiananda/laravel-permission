<?php

namespace Anandalee\Permission\Traits;

use Anandalee\Permission\Models\Permission;

trait HasPermission
{
    public function permissions()
    {
        return $this->morphToMany(Permission::class, 'model', 'model_has_permissions');
    }
}
