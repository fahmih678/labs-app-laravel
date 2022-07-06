<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function facilities(){
        return $this->hasMany(Facility::class, 'labs_id', 'id');
    }
}
