<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stay extends Model
{
    use HasFactory;

    protected $table = 'stays';

    protected $fillable = ['name', 'address', 'lat', 'lng', 'phone', 'email', 'web'];
}
