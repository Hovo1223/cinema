<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel_Slides extends Model
{
    protected $table = 'carousel_slides';

    protected $fillable = ['slide_id'];

    public function slide()
    {
        return $this->belongsTo(Films::class);
    }
}
