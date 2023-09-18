<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Role_data extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function role(): BelongsTo
    // {
    //     return $this->belongsTo(Role::class);
    // }
}
