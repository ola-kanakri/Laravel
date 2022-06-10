<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;
    //$fillable attribute is an array containing all those fields of table which can be filled using mass-assignment. 
    //Mass assignment refers to sending an array to the model to directly create a new record in Database.
    protected $fillable = [
        'movie_name',
        'movie_gener',
        'movie_imag_name',
        'movie_imag_path',
        'movie_description',
    ];
}
