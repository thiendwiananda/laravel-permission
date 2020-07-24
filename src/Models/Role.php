<?php

namespace Anandalee\Permission\Models;

use Anandalee\Permission\Traits\HasPermission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasPermission;

    protected $guarded = ['id'];
}
