<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;

    protected $fillable = [
        'piece_of_art',
        'painter',
        'creation_date',
        'art_movement',
        'artistic_technique',
        'size',
        'museum',
        'curiosity',
    ];
}
