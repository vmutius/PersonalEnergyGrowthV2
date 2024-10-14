<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glossar extends Model
{
    use HasFactory;

    protected $fillable = [
        'term',
        'definition',
    ];


}
