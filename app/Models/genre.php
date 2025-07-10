<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $fillable = [
        'genre',
    ];
    

    public function slides()
    {
        return $this->belongsToMany(Films::class, 'genre_to_films', 'genre_id', 'slide_id');
    }

}
