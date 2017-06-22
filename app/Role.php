<?php

namespace App;

use App\Filters\Filterable;

class Role extends \Spatie\Permission\Models\Role
{
    use Filterable;
}
