<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_arabic',
        'name_english',
        'slug_arabic',
        'slug_english',
        'description_arabic',
        'description_english',
        'cover_image',
        'image',
        'status',
    ];
}
