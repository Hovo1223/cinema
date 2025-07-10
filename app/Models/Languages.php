<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'slide_id',
        'name',
        'country_key'
    ];
    public function slides()
    {
        return $this->belongsToMany(Films::class, 'country_slide', 'country_id', 'slide_id');
    }
    
    
}
