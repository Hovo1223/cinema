<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country_slide extends Model
{
    use HasFactory;
    protected $table = 'country_slide';
    protected $fillable = [
        'country_id',
       ' slide_id'
    ];
}
