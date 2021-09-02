<?php

namespace App\Models\Spatie;
use App\Traits\ModelTrait;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Models\Role as BaseRole;
use Illuminate\Notifications\Notifiable;
class Role extends BaseRole
{
    use ModelTrait , Notifiable,HasPermissions;
}
