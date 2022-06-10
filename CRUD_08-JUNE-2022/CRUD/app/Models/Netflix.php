<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Netflix extends Model
{
    use HasFactory;

    protected $fillable = ['movie_name',
    'movie_description',
    'movie_gener',
    'movie_imag_name',
    'movie_imag_path',];
}
