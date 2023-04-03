<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;

    protected $table = 'stugrades';

    protected $fillable =[
        'esNo',
        'sno',
        'prelim',
        'midterm',
        'finals',
        'remarks',
    ];
}
