<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
   protected $table='categories';
    protected $fillable = [
        'name'
        ];

}
