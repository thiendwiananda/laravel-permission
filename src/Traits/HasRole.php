<?php

namespace Anandalee\Permission\Traits;

use Anandalee\Permission\Models\Permission;
use Anandalee\Permission\Models\Role;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

trait HasRole
{
    use HasRelationships;

    public function permissions()
    {
        return $this->hasManyDeep(
            Permission::class,
            ['model_has_roles', Role::class, 'model_has_permissions'],
            [['model_type', 'model_id'], null, ['model_type', 'model_id']]
        );
    }

    public function roles()
    {
        return $this->morphToMany(Role::class, 'model', 'model_has_roles');
    }
}
