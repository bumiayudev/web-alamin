<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'position', 'image'];
}
