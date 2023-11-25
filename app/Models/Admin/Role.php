<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Spatie\Permission\Models\Role as BaseRole;
class Role extends BaseRole
{
    use HasFactory;

//    public function users()
//    {
//        return $this->belongsToMany(User::class);
//    }
    public static function find(int $int)
    {
    }
}
