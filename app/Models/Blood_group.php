<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Donar;

class Blood_group extends Model
{
    protected $fillable = [
        'blood-group',
        'donar_id',
        'BP',
        'hemoglobin'
    ];

    public function donar(){
        return $this->belongsTo(Donar::class);
    }
}
