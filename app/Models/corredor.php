<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corredor extends Model
{
    use HasFactory;

    protected $table = 'corredors';

    protected $fillable = ['name', 'last_name', 'DNI', 'Dob', 'email', 'province', 'city', 'category_name', 'route_name', 'payment_id'];

    public function category(){

        return $this->belongsTo('App\Models\category');
    }

    public function route(){

        return $this->belongsTo('App\Models\route');
    }
}
