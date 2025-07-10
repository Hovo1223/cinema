<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre_to_films extends Model
{
    use HasFactory;
    protected $fillable = [
        'genre_id','slide_id'
    ];

    public function slides()
    {
        return $this->belongsToMany(Films::class, 'genre_to_films');
    }

}
