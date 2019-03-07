<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUser extends Pivot
{
    /**
     * Role User Pivot Table
     *
     * @var string
     */
    protected $table = 'role_user';
}
