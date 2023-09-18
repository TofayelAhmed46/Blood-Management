<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role_data;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function role_data(): HasMany
    // {
    //     return $this->hasMany(Role_data::class);
    // }
}

