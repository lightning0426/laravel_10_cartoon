<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'tbl_city_region';

    protected $fillable = [
        'name',
        'flag',
        'prefecture_id'        
    ];
}
