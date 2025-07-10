<?php

namespace App\Models;

use Carbon\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'director',
        'cast',
        'genre_id',
        'language_id',
        'duration',
        'age',
        'description',
        'start_time',
        'end_time',
        'price',
        'halls_id',
        'post_image'
    ];
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_to_films', 'slide_id', 'genre_id');
    }

    public function countries()
    {
        return $this->belongsToMany(Languages::class, 'country_slide', 'slide_id', 'country_id');
    }
    

}
