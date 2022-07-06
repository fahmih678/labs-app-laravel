<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lab(){
        return $this->belongsTo(Lab::class, 'labs_id', 'id');
    }
}
