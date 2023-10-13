<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
protected $fillable = [
    'user_id',
    'image',
    'phone',
    'district',
    'thana',
    'religion',
    'gender',
    'profession',
    'dob'
];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function blood_group(){
        $this->hasOne(Blood_group::class);
    }
}
