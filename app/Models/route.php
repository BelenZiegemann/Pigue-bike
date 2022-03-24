<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    use HasFactory;
    protected $table = 'routes';

    protected $fillable = ['name', 'cost', 'description'];

    public function registereds(){

        return $this->hasMany('App\Models\corredor');
    }
}
