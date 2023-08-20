<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vowel extends Model
{
    use HasFactory;
    protected $table = 'vowels';

    protected $fillable = [
        'tibetan',
        'IPA',
    ];
}
