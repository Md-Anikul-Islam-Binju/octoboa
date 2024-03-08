<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_arabic',
        'title_english',
        'slug_arabic',
        'slug_english',
        'short_description_arabic',
        'short_description_english',
        'long_description_arabic',
        'long_description_english',
        'image',
        'logo',
        'status',
    ];
}
