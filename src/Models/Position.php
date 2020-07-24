<?php

namespace Anandalee\Permission\Models;

use Anandalee\Permission\Traits\HasRole;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasRole;

    protected $guarded = ['id'];
}
