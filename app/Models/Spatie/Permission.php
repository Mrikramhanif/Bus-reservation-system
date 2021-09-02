<?php
namespace App\Models\Spatie;

use App\Traits\ModelTrait;
use Spatie\Permission\Models\Permission as BasePermission;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class Permission extends BasePermission
{
    use Notifiable, HasRoles, ModelTrait;
}