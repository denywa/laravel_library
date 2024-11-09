<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CD extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'artist', 
        'genre', 
        'release_year'
    ];
    
    
    protected $table = 'cds';
}