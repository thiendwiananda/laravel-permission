<?php

namespace Anandalee\Permission\Traits;

use Anandalee\Permission\Models\Permission;
use Anandalee\Permission\Models\Position;
use Anandalee\Permission\Models\Role;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

trait HasPosition
{
    use HasRelationships;

    public function permissions()
    {
        return $this->hasManyDeep(
            Permission::class,
            ['model_has_positions', Position::class, 'model_has_roles', Role::class, 'model_has_permissions'],
            [['model_type', 'model_id'], null, ['model_type', 'model_id'], null, ['model_type', 'model_id']]
        );
    }

    public function roles()
    {
        return $this->hasManyDeep(
            Role::class,
            ['model_has_positions', Position::class, 'model_has_roles'],
            [['model_type', 'model_id'], null, ['model_type', 'model_id']]
        );
    }

    public function positions()
    {
        return $this->morphToMany(Position::class, 'model', 'model_has_positions');
    }
}
